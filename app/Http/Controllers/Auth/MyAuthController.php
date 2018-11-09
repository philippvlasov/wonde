<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $array = $request->all();
        $remember = $request->has('remember');

        if(Auth::attempt([
            'login' => $array['login'],
            'password' => $array['password'],
        ], $remember))
        {
            return redirect()->intended('/');
        }

        return redirect()->back()
            ->withInput($request->only('login', 'password'))
            ->withErrors([
                'login' => 'Данные аутентификации не верны'
            ]);
    }
}
