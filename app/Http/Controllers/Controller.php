<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;



abstract class Controller
{
    public function register(Request $request): RedirectResponse
    {
        User::Create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        
        ]);

        return redirect(('login'));
    }

    public function login(){}
    public function logout(){}
    
}

