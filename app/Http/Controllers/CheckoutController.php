<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Cart;

class CheckoutController extends Controller
{
    public function showpagecheckout(Request $request){
    //    $arr_product_selected=[];
    //     if (isset($request->product_selected)) {

    //        foreach ($request->product_selected as $product) {
    //             $arr_product_selected = $product->rowId;
    //        } 
    //     }
        
    //     return view ('checkout') -> with('product_seleted', $arr_product_selected );

        // $cartlist = Cart::content();
        // foreach ($cartlist as $product){
        //     if (isset($request->product_selected) && $product->id == $request->id) {
        //         $arr_product_selected = Cart::get($request->rowId);

        //     }
            
        // }
        // return view ('checkout') -> with('product_seleted', $arr_product_selected );     
   
            return view ('checkout');
    }

    

    

    
}
