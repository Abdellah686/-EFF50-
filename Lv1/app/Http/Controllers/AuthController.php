<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            $id = Auth::user()->id;
            return redirect()->route('profile',$id);
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');
    }


}
