<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
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

//home
Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index'])->name('showpagehome');

//login logout register
Route::get('/login', [AuthController::class,'showpagelogin'])->name('showpagelogin');
Route::post('/login', [AuthController::class,'checklogin'])->name('checklogin');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
});

//cart
Route::get('/cart', [CartController::class,'index'])->name('showpagecart');
Route::get('/addtocart', [CartController::class,'addtocart'])->name('addtocart');
Route::post('/addtocart', [CartController::class,'addtocart'])->name('addtocart');
Route::get('/deletecart/{rowId}', [CartController::class,'deletecart'] )->name('deletecart');

Route::get('/product/{id}', [ProductController::class,'index'], 
    function($id) {
        return view('product');
})->name('showpageproduct');

// Route::get('/cart', [ProductController::class,'buyproductnow'], 
//     function($id) {
//         return view('cart');
// })->name('buyproductnow');

   // Route::resource('account', AccountController::class);

//account
Route::get('/account', [AccountController::class,'index'])->name('showpageaccount');
Route::get('/account-info', [AccountController::class,'index'])->name('showuserinfo');
Route::get('/account-bank', [AccountController::class,'showbankaccount'])->name('showbankaccount');
Route::get('/account-address', [AccountController::class,'showaddress'])->name('showaddress');
Route::get('/account-change-password', [AccountController::class,'changepassword'])->name('changepassword');
Route::get('/account-transactions', [AccountController::class,'showtransaction'])->name('showtransaction');
Route::get('/account-voucher', [AccountController::class,'showvoucher'])->name('showvoucher');


//order
Route::get('/trackorder', [OrderController::class,'index'])->name('showpagetrackorder');

//payment
Route::get('/checkout', [CheckoutController::class,'showpagecheckout'])->name('showpagecheckout');
Route::post('/checkout', [CheckoutController::class,'showpagecheckout'])->name('showpagecheckout');

Route::get('/payment', [OrderController::class,'createtrans'])->name('createtrans');
Route::post('/payment', [OrderController::class,'createtrans'])->name('createtrans');


