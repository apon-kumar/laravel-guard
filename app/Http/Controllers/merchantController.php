<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class merchantController extends Controller
{
    public function showLogin()
    {
        return view('merchant.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('merchant')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }
        else{
            return redirect()->back()->with('status', 'Email or Password is wrong');
        }
    }

    public function logout()
    {
        Auth::guard('merchant')->logout();
        return redirect('/');
    }
}

    

