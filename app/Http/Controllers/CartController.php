<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class CartController extends Controller
{

    public function getcart(Request $request){
        $user = Auth::user()->id;
        return DB::select("select od.amount, pd.name, pd.image_link, pd.discount, pd.price from tborder od join product pd on od.product_id=pd.id join transaction ts on od.transaction_id=ts.id join user us on ts.user_id=us.id where us.id='$user'"); 
    }

//     public function deletproductincart(Request $request){
//         return DB::select("DELETE FROM `tborder` WHERE 
// ( 
//     select od.id
//     from tborder od join product pd on od.product_id=pd.id 
//     				join transaction ts on od.transaction_id=ts.id 
//     				join user us on ts.user_id=us.id
//     where us.id = '1' and pd.id = '1'
// )
// "); 
//     }

    public function index(Request $request){
        return view ('cart')
            ->with(['cartproducts' => $this->getcart($request)]);
    }

    
}