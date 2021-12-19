<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // public function index(){
    //     $data1 = DB::select("select * from product limit 6");
    //     $data2 = DB::select("select * from product limit 20"); 
    //     return view ('welcome')->with(['products_flashsale'=>$data1])->with(['products'=>$data2]);
    // }

    // public function getflashsale(Request $request){
    //     $data = DB::select("select * from product limit 5");
    //     return view ('welcome', ['products'=>$data]);
    // }

    // public function getproduct(){
    //     $data = DB::select("select * from product limit 20"); 
    //     return (['products'=>$data]);
    // }
    
    // public function getflashsale(){
    //     $data = DB::select("select * from product limit 5"); 
    //     return (['products_flashsale'=>$data]);
    // }

    // public function index(){
    //     $product = getproduct();
    //     $product_flashsale = getflashsale(); 
    //     return view ('welcome', compact('$product', '$product_flashsale'));
    // }

}