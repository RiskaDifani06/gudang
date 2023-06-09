<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('Login.login');
})->name('login');

Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['auth','ceklevel:admin']],function(){
    Route::get('/index', function () {
        return view('admin/index');
    })->name('index');

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

