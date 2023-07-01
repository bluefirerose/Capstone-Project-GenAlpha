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

    public function registerPost (Request $request)
    {
        $user = new User();

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->birthdate = $request->birthdate;
        $user->password = Hash::make($request ->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }
}
