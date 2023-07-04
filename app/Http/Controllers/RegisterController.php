<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected function validator(array $data){
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'usertype' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }
    protected function create(array $data){
        return User::create([
            'username' => $data['username'],
            'usertype' => $data['usertype'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
