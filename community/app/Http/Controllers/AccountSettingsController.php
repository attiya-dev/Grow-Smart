<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AccountSettingsController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('account-settings');
    }

    public function updateEmail(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        $request->validate([
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'current_password' => [
                'required',
            ],
        ]);

        $newEmail = strtolower(trim($request->email));

        if (!Hash::check($request->current_password, $user->password)) {
            return back()
                ->withErrors([
                    'current_password' => 'Current password is incorrect.'
                ])
                ->withInput();
        }

        if (strtolower($user->email) === $newEmail) {
            return back()
                ->withErrors([
                    'email' => 'The new email must be different from your current email.'
                ])
                ->withInput();
        }

        $emailExists = DB::table('users')
            ->whereRaw('LOWER(email) = ?', [$newEmail])
            ->where('id', '!=', $user->id)
            ->exists();

        if ($emailExists) {
            return back()
                ->withErrors([
                    'email' => 'This email address is already registered.'
                ])
                ->withInput();
        }

        $otp = random_int(100000, 999999);

        session([
            'email_verification_pending' => true,
            'pending_email' => $newEmail,
            'email_change_otp' => (string) $otp,
            'email_change_otp_expires_at' => now()->addMinutes(10)->timestamp,
        ]);

        try {
            Mail::raw(
                "Your GrowSmart email verification code is: {$otp}\n\nThis code will expire in 10 minutes.",
                function ($message) use ($newEmail) {
                    $message->to($newEmail);
                    $message->subject('GrowSmart - Email Verification Code');
                }
            );
        } catch (\Throwable $e) {
            session()->forget([
                'email_verification_pending',
                'pending_email',
                'email_change_otp',
                'email_change_otp_expires_at',
            ]);

            return back()
                ->withErrors([
                    'email' => 'Unable to send verification email.'
                ])
                ->withInput();
        }

        return redirect()
            ->route('account.settings')
            ->with(
                'success',
                'A 6-digit verification code has been sent to your new email address.'
            );
    }

    public function verifyEmail(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'otp' => [
                'required',
                'digits:6',
            ],
        ]);

        $userId = Auth::id();

        $savedOtp = session('email_change_otp');
        $pendingEmail = session('pending_email');
        $expiresAt = session('email_change_otp_expires_at');

        if (!$savedOtp || !$pendingEmail || !$expiresAt) {
            return redirect()
                ->route('account.settings')
                ->withErrors([
                    'otp' => 'Verification session has expired. Please request a new code.'
                ]);
        }

        if (now()->timestamp > (int) $expiresAt) {
            session()->forget([
                'email_verification_pending',
                'pending_email',
                'email_change_otp',
                'email_change_otp_expires_at',
            ]);

            return redirect()
                ->route('account.settings')
                ->withErrors([
                    'otp' => 'The verification code has expired. Please request a new code.'
                ]);
        }

        if ((string) $request->otp !== (string) $savedOtp) {
            return back()
                ->withErrors([
                    'otp' => 'The verification code is incorrect.'
                ])
                ->withInput();
        }

        $newEmail = strtolower(trim($pendingEmail));

        $emailExists = DB::table('users')
            ->whereRaw('LOWER(email) = ?', [$newEmail])
            ->where('id', '!=', $userId)
            ->exists();

        if ($emailExists) {
            session()->forget([
                'email_verification_pending',
                'pending_email',
                'email_change_otp',
                'email_change_otp_expires_at',
            ]);

            return redirect()
                ->route('account.settings')
                ->withErrors([
                    'email' => 'This email address is already registered by another account.'
                ]);
        }

        $userExists = DB::table('users')
            ->where('id', $userId)
            ->exists();

        if (!$userExists) {
            session()->forget([
                'email_verification_pending',
                'pending_email',
                'email_change_otp',
                'email_change_otp_expires_at',
            ]);

            Auth::logout();

            return redirect()
                ->route('login')
                ->withErrors([
                    'error' => 'Your account could not be found.'
                ]);
        }

        try {
            DB::beginTransaction();

            $updated = DB::table('users')
                ->where('id', $userId)
                ->update([
                    'email' => $newEmail,
                    'email_verified_at' => now(),
                    'updated_at' => now(),
                ]);

            if ($updated !== 1) {
                DB::rollBack();

                return redirect()
                    ->route('account.settings')
                    ->withErrors([
                        'email' => 'Email address could not be updated.'
                    ]);
            }

            DB::commit();
        } catch (\Throwable $e) {
            if (DB::transactionLevel() > 0) {
                DB::rollBack();
            }

            return redirect()
                ->route('account.settings')
                ->withErrors([
                    'email' => 'Unable to update your email address. Please try again.'
                ]);
        }

        $updatedEmail = DB::table('users')
            ->where('id', $userId)
            ->value('email');

        if (!$updatedEmail || strtolower($updatedEmail) !== $newEmail) {
            return redirect()
                ->route('account.settings')
                ->withErrors([
                    'email' => 'The email address was not saved in the database.'
                ]);
        }

        $freshUser = User::find($userId);

        if ($freshUser) {
            Auth::setUser($freshUser);
        }

        session()->forget([
            'email_verification_pending',
            'pending_email',
            'email_change_otp',
            'email_change_otp_expires_at',
        ]);

        return redirect()
            ->route('account.settings')
            ->with(
                'email_success',
                'Your email address has been changed and verified successfully.'
            );
    }

    public function cancelEmailChange()
    {
        session()->forget([
            'email_verification_pending',
            'pending_email',
            'email_change_otp',
            'email_change_otp_expires_at',
        ]);

        return redirect()
            ->route('account.settings')
            ->with(
                'success',
                'Email change verification was cancelled.'
            );
    }

    public function updatePassword(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()
                ->withErrors([
                    'current_password' => 'Current password is incorrect.'
                ]);
        }

        if (Hash::check($request->password, $user->password)) {
            return back()
                ->withErrors([
                    'password' => 'Your new password must be different from your current password.'
                ]);
        }

        try {
            DB::table('users')
                ->where('id', $user->id)
                ->update([
                    'password' => Hash::make($request->password),
                    'updated_at' => now(),
                ]);
        } catch (\Throwable $e) {
            return back()
                ->withErrors([
                    'password' => 'Unable to change your password. Please try again.'
                ]);
        }

        return back()
            ->with(
                'password_success',
                'Password changed successfully.'
            );
    }
}