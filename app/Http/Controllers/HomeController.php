<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getuser(){
        return DB::select("select name, avatar from user"); 
    }
    

    public function getproduct(){
        return DB::select("select * from product limit 20"); 
    }
    
    public function getflashsale(){
        return DB::select("select * from product limit 6"); 
        
    }

    public function getcatalog(){
        return DB::select("select * from catalog");
    }

    public function index(){
        return view ('welcome')
            ->with(['userinfo' => $this->getuser()])
            ->with(['products' => $this->getproduct()])
            ->with(['products_flashsale' => $this->getflashsale()])
            ->with(['catalogs' => $this->getcatalog()]);
    }

}
