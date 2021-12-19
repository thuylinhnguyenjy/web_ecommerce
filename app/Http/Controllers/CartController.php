<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class CartController extends Controller
{
    public function showpagecart(){
        return view('cart');
    }

    
}