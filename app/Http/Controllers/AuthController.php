<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class AuthController extends Controller
{
    public function showpagelogin(){
        return view('login');
    }

    public function showpageregister(){
        return view('register');
    }

    public function showpageconfirmregis(){
        return view('confirm-regis');
    }

    public function checklogin(Request $request){
    
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3|max:20'
        ]);

         $user_data = array(
          'email'  => $request->get('email'),
          'password' => $request->get('password')
         );

        if(Auth::attempt($user_data))
        {
            return redirect('/');
            
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function logout(){
        Auth::logout();
        return view ('login');
    }
}