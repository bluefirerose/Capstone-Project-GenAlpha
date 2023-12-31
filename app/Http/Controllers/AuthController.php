<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return back()->with('error', 'Email is already registered');
        }


        $user = new User();

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/userhome')->with('success', 'Login Success');
        }
        return back()->with('error', 'Email or Password is incorrect');
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/login')->with('success', 'Logout Success');
    }
}
