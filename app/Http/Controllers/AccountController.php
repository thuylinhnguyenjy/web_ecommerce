<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    
}
