<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function gotoproduct(){
        return ('product');
    }

    public function index(){
        return view ('product')
            ->with(['productinfo' => $this->gotoproduct()]);
            
    }

}