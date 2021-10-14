<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index() {
        return view('dashboard.auth.login');
    }
    public function process(Request $request) {
    

        $credentials=$request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect(route('dashboard.index'));
            
        }else {
            return redirect()->Route('login')->with('danger', 'Your Email Or Password is Wrong');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->to('login');
    }

    public function dashboard() {
        return view('dashboard.layout.main');
    }

};
