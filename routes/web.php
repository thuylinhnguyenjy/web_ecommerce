<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', [AuthController::class,'showpagelogin'])->name('showpagelogin');
Route::post('/login', [AuthController::class,'checklogin'])->name('checklogin');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
});

Route::get('/cart', [CartController::class,'index'])->name('showpagecart');

Route::get('/product', [ProductController::class,'index'])->name('showpageproduct');


