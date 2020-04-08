<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('auth.register');
    }   

    public function validator(array $data) {
        return Validator::make($data, [
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed'
        ]);
    }
    
    public function postRegister(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = app('hash')->make($request->password);
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->save();

        if($user->id) {
            return redirect()->route('get.login');
        }
        return redirect()->back();
    }
}