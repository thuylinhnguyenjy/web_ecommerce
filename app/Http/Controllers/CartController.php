<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Cart;

class CartController extends Controller
{

    public function getcart(){
        $user = Auth::user()->id;
        return DB::select("select od.amount, pd.name, pd.image_link, pd.discount, pd.price from tborder od join product pd on od.product_id=pd.id join transaction ts on od.transaction_id=ts.id join user us on ts.user_id=us.id where us.id='$user'"); 
    }

    //  public function buyproductnow(Request $request){

    //         $currentts = date('Y-m-d H:i:s', time());
    //         $user_id = Auth::user()->id;
    //         //$sql1 = DB::insert("INSERT INTO `transaction`(`status`, `user_id`, `user_name`, `user_email`, `user_phone`, `amount`, `payment`, `payment_info`, `message`, `security`, `created`)  VALUES ('1','$user_id', '', '', '', '1', '', '', '', '', '$currentts')");
    //         //$sql2 = DB::insert("INSERT INTO `tborder`(`transaction_id`, `product_id`, `qty`, `amount`, `data`, `status`) VALUES ('1','$user_id','$qty','$amount','','1')");
    //         //return $sql1;
        
    //     return Redirect::to('/cart');
    // }

    public function addtocart(Request $request){
        
        $quantity = $request->qty;
        $product = DB::select("select * from product where id = '$request->productid'")[0];

        $data['id'] = $request->productid;
        $data['name'] = $product->name;
        $data['qty'] = $quantity;
        $data['price'] = $product->price;
        $data['weight'] = $product->price;
        $data['options']['image']= $product->image_link;
        Cart::add( $data );

        if (isset($_POST['addproduct'])){
            return back();
        }
        else {
            return Redirect::to('/cart')->with('message', 'success');

        }
        //Cart::store( Auth::user()->id );
    }

    public function deletecart($rowid){
        Cart::update ( $rowid, 0 );
        return Redirect::to('/cart');
    }

    public function increasequantity($rowid){
        $product = Cart::get($rowid);
        $quantity = $product->qty + 1;
        Cart::update ( $rowid, $quantity);
        return Redirect::to('/cart');
    }

    public function decreasequantity($rowid){
        $product = Cart::get($rowid);
        $quantity = $product->qty - 1;
        Cart::update ( $rowid, $quantity);
        return Redirect::to('/cart');
    }

    public function getprice(Request $request){
        $productid = $request->input('productid');
        $totalprice = Cart::get($rowid)->price;
        return $totalprice;
    }

    public function index(){
        return view ('cart')
            ->with(['cartproducts' => $this->getcart()]);
    }

    
}