<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class UserRegisteredController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        $validatedAttributes=request() -> validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'password' => ['required', Password::min(6), 'confirmed'],//confirm will look at password_conformation so must like that format



        ]);
        //create user
        $validatedAttributes['role'] = 'student';
        $user= User::create($validatedAttributes);
        //log in
        Auth::login($user);
        //redirect somewhere

        return redirect('/');
    }
}
