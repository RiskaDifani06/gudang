<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

    public function pegawai(){
        return view('pegawai.pegawai');
    }
}
