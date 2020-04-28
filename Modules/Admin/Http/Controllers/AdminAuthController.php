<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function getLogin() {
        return view('admin::auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('admin.home');
        }
        return redirect()->back();
    }

    public function logoutAdmin() {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
