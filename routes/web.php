<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout/index');
});

Route::get('/tambahBrg', function () {
    return view('admin/tambahBrg');
})->name('tambahBrg');

Route::get('/DataBrgMasuk', function () {
    return view('admin/DataBrgMasuk');
})->name('DataBrgMasuk');

Route::get('/DataBrgKeluar', function () {
    return view('admin/DataBrgKeluar');
})->name('DataBrgKeluar');