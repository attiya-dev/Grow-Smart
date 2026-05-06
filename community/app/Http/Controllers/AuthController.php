<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        return redirect('/login')->with('success','Registration successful. Please login.');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();

            // ✅ Prevent inactive users from logging in
            if(!$user->is_active){
                Auth::logout();
                return back()->with('error','Your account is inactive. Please contact admin.');
            }

            // Redirect based on role
            if($user->is_admin) return redirect()->route('admin.info');
            elseif($user->is_expert) return redirect()->route('expert.users');
            else return redirect()->route('user.home');
        }

        return back()->with('error','Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
