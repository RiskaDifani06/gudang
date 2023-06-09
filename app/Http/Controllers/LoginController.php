<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            if (auth()->user()->level == 'admin') {
                return redirect('index');
            }
            else if (auth()->user()->level == 'pegawai') {
                return redirect('pegawai');
            }
            // return redirect('index','pegawai');
        }
        return redirect('login');
    }

    public function logout(Request $request){
        Auth::logout();
            return redirect('login');
    }
}
