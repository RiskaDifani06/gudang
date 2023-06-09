<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_TambaBarang extends Controller
{
    public function tambahBrg() {
        return view('admin.tambahBrg', [
            'title' => 'Lihat Tambah Barang'
        ]);
}
}
