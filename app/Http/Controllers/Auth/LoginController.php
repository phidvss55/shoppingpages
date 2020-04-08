<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use Authenticatable;
    
    public function getLogin() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if(Auth::attemp($credentials)) {
            return redirect()->route('home');
        }
    }
}
