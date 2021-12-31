<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;

class AccountController extends Controller
{
    public function index(){
        return view ('infoaccount');
    }

    public function showbankaccount(){
        return view ('bankaccount');
    }

    public function showaddress(){
        return view ('addressaccount');
    }

    public function changepassword(){
        return view ('infoaccount');
    }

    public function showtransaction(){
        return view ('transaccount');
    }

    public function showvoucher(){
        return view ('voucheraccount');
    }

    public function changeinfo(Request $request){
        $user = Auth::user()->id;
        DB::update("UPDATE `user` SET `name`='$request->accname',`phone`='$request->phone' WHERE id='$user'");
        return Redirect::to('/account');

    }
    
}
