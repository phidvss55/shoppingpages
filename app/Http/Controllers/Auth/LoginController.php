<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\Authenticatable;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{    
    public function getLogin() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if( Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('home');
    }
}