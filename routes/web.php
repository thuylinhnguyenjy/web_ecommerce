<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::get('/dang-nhap', [AuthController::class,'showpagelogin'])->name('showpagelogin');
Route::post('/dang-nhap', [AuthController::class,'checklogin'])->name('checklogin');

Route::get('/dang-xuat', [AuthController::class,'logout'])->name('logout');

Route::get('/dang-ky', function () {
    return view('register');
});

Route::get('/gio-hang', [CartController::class,'showpagecart'])->name('showpagecart');

