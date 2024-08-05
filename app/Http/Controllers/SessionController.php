<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //attemp log in
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => ('sorry the credentials do not match'),
            ]);

        }

        //regenerate session token
        request()->session()->regenerate();
        if (Auth::user()->role == 'admin') {
            return redirect('/admin'); // Change 'admin.dashboard' to your admin route
        }
        //redirect
        return redirect('/');
    }

    public function destroy()
    {

        Auth::logout();
        return redirect('/');
    }
}


namespace App\Http\Controllers;


