<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Crop;
use App\Models\EmailVerification;
use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if (!$user->is_active) {
                Auth::logout();
                return view('home');
            }

            if ($user->is_admin) {
                return redirect()->route('admin.info');
            }

            if ($user->is_expert) {
                return redirect()->route('expert.users');
            }

            return redirect()->route('dashboard');
        }

        return view('home');
    }

    public function dashboard()
    {
        $month = now()->month;

        $cropQuery = Crop::query();
        if (is_urdu()) {
            $cropQuery->where('urdu_completed', true)
                ->whereNotNull('name_ur')
                ->where('name_ur', '!=', '');
        }

        if ($month >= 4 && $month <= 9) {
            $sliderCrops = (clone $cropQuery)->where('season', 'summer')
                ->take(10)
                ->get();
        } else {
            $sliderCrops = (clone $cropQuery)->where('season', 'winter')
                ->take(10)
                ->get();
        }

        $cropDataCrops = (clone $cropQuery)->take(8)->get();

        $pestCrops = (clone $cropQuery)
            ->whereHas('pestManagements', function ($query) {
                if (is_urdu()) {
                    $query->where('urdu_completed', true);
                }
            })
            ->take(8)
            ->get();

        return view('front.dashboard', compact(
            'sliderCrops',
            'cropDataCrops',
            'pestCrops'
        ));
    }

    public function showRegister()
    {
        if (Auth::check()) {
            return $this->redirectToPanel(Auth::user());
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/[^A-Za-z0-9]/',
            ],
        ], [
            'password.required' =>
                'Please enter a password.',

            'password.min' =>
                'Password must be at least 8 characters long.',

            'password.confirmed' =>
                'Password confirmation does not match.',

            'password.regex' =>
                'Password must contain at least one special character.',
        ]);

        EmailVerification::where(
            'email',
            $request->email
        )->delete();

        $otp = rand(100000, 999999);

        EmailVerification::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp' => $otp,
            'expires_at' => Carbon::now()->addMinutes(10),
        ]);

        Mail::to($request->email)->send(
            new SendOtpMail(
                $request->name,
                $otp
            )
        );

        session([
            'email' => $request->email
        ]);

        return redirect()
            ->route('verify.form')
            ->with(
                'success',
                'OTP sent successfully.'
            );
    }

    public function showVerifyForm()
    {
        if (!session()->has('email')) {
            return redirect()
                ->route('register');
        }

        return view('auth.verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $email = session('email');

        $verification = EmailVerification::where(
            'email',
            $email
        )->first();

        if (!$verification) {
            return redirect()
                ->route('register')
                ->with(
                    'error',
                    'Verification request not found.'
                );
        }

        if (
            Carbon::now()->gt(
                $verification->expires_at
            )
        ) {
            $verification->delete();

            return redirect()
                ->route('register')
                ->with(
                    'error',
                    'OTP expired. Please register again.'
                );
        }

        if ($verification->otp != $request->otp) {
            return back()->with(
                'error',
                'Invalid OTP.'
            );
        }

        $user = User::create([
            'name' => $verification->name,
            'email' => $verification->email,
            'password' => $verification->password,
            'email_verified_at' => now(),
            'is_admin' => false,
            'is_expert' => false,
            'is_active' => true,
        ]);

        $verification->delete();

        session()->forget('email');

        Auth::login($user);

        return redirect()
            ->route('dashboard')
            ->with(
                'success',
                'Registration Successful.'
            );
    }

    public function showLogin()
    {
        if (Auth::check()) {
            return $this->redirectToPanel(Auth::user());
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])
        ) {
            $request->session()->regenerate();

            $user = Auth::user();

            if (!$user->is_active) {
                Auth::logout();

                return back()->with(
                    'error',
                    'Your account is inactive.'
                );
            }

            if ($user->is_admin) {
                return redirect()
                    ->route('admin.info');
            }

            if ($user->is_expert) {
                return redirect()
                    ->route('expert.users');
            }

            return redirect()
                ->route('dashboard');
        }

        return back()->with(
            'error',
            'Invalid Email or Password.'
        );
    }

    private function redirectToPanel(User $user)
    {
        if ($user->is_admin) {
            return redirect()->route('admin.info');
        }

        if ($user->is_expert) {
            return redirect()->route('expert.users');
        }

        return redirect()->route('dashboard');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')
                ->user();

            $user = User::where(
                'email',
                $googleUser->getEmail()
            )->first();

            if ($user) {
                if (!$user->google_id) {
                    $user->google_id = $googleUser->getId();
                    $user->email_verified_at = now();
                    $user->save();
                }
            } else {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => Hash::make(
                        rand(10000000, 99999999)
                    ),
                    'email_verified_at' => now(),
                    'is_admin' => false,
                    'is_expert' => false,
                    'is_active' => true,
                ]);
            }

            Auth::login($user);

            if ($user->is_admin) {
                return redirect()
                    ->route('admin.info');
            }

            if ($user->is_expert) {
                return redirect()
                    ->route('expert.users');
            }

            return redirect()
                ->route('dashboard');

        } catch (\Exception $e) {
            return redirect()
                ->route('login')
                ->with(
                    'error',
                    'Google Login Failed.'
                );
        }
    }

    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with(
                'success',
                'Password reset link has been sent to your email.'
            );
        }

        return back()->withErrors([
            'email' =>
                'We could not find an account with this email address.',
        ]);
    }

    public function showResetPassword(
        string $token,
        Request $request
    ) {
        return view(
            'auth.reset-password',
            [
                'token' => $token,
                'email' => $request->email,
            ]
        );
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/[^A-Za-z0-9]/',
            ],
        ], [
            'password.required' =>
                'Please enter a new password.',

            'password.min' =>
                'Password must be at least 8 characters long.',

            'password.confirmed' =>
                'Password confirmation does not match.',

            'password.regex' =>
                'Password must contain at least one special character.',
        ]);

        $status = Password::reset(
            $request->only(
                'email',
                'password',
                'password_confirmation',
                'token'
            ),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()
                ->route('login')
                ->with(
                    'success',
                    'Your password has been reset successfully. You can now login.'
                );
        }

        return back()->withErrors([
            'email' =>
                'This password reset link is invalid or has expired.',
        ]);
    }

   public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home');
}
}
