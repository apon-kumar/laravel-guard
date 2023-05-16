<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customerController extends Controller
{
    public function showLogin()
    {
        return view('customer.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        
        if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }
        else{
            return redirect()->back()->with('status', 'Email or Password is wrong');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/');
    }
}
