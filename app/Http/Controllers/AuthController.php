<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function startRegister()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|max:50|confirmed',
        ]);

        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $user_profile = new UserProfile;
            $user_profile->user_id = $user->id;
            $user_profile->save();
            return redirect('/registration/form')->with('sucess', 'You have been registered');
        } catch (\Exception $e) {
            return redirect('/registration/form')->with('error', $e->getMessage());
        }
    }
    public function LoginPage()
    {
        return view('login-page');
    }

    public function LoginUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:4|max:50',
        ]);
        try {
            $userCredentials = $request->only('email', 'password');

            if (Auth::attempt($userCredentials)) {
                if (auth()->user()->role == 0) {
                    return redirect('/user/home');
                } elseif (auth()->user()->role == 1) {
                    return redirect('/admin/home');
                } else {
                    return redirect('/')->with('error', 'Error to find your role');
                }
            } else {
                return redirect('/login/form')->with('error', 'Wrong User Credentials');
            }
        } catch (\Exception $e) {
            return redirect('/login/form')->with('error', $e->getMessage());
        }
    }
}