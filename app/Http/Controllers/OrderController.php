<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class OrderController extends Controller
{

    public function index(){
        $user_id = Auth::user()->id;
        $transinfo = DB::select("select * from transaction where user_id='$user_id' ");

        return view ('trackorder')->with(['transinfo' => $transinfo]) ;       
        
        // return view ('product')
        //     ->with('productinfo', $this->gotoproduct($id)) ;       

    }

    public function createtrans(Request $request){

        $currentts = date('Y-m-d H:i:s', time());
        $user_id = Auth::user()->id;
        $userinfo = DB::select("select * from user where id='$user_id'")[0];
        
        $insert_trans = DB::insert(
        "INSERT INTO `transaction`(
            `status`, `user_id`, `user_name`, `user_email`, `user_phone`, `amount`, `payment`, `payment_info`, `message`, `security`, `created`)  
            VALUES ('3','$user_id', '$userinfo->name', '$userinfo->email', '$userinfo->phone', '12', '$request->amount', '', '', '', '$currentts')");
        
//        return view('trackorder');

        $counttrans = DB::select("select max(id) as maxid from transaction")[0];

        $transinfo = DB::select("select * from transaction where user_id='$user_id' and id='$counttrans->maxid' ");

        return view ('trackorder')->with(['transinfo' => $transinfo]) ; 
        
    }

    


}