<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ProductController extends Controller
{
    public function gotoproduct($id){
        return DB::select("select pd.*, ct.name as catalog_name from product pd join catalog ct on pd.catalog_id=ct.id where pd.id = '$id' ")[0];
    }

    public function index($id){
        return view ('product')
            ->with('productinfo', $this->gotoproduct($id)) ;       

    }

}