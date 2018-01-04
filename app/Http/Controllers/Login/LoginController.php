<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function login(){

        return view('admin.auth.login');

    }

    public function postLogin(Request $request){
    	// dd('logn');
    	$email 	= trim($request->email);
    	$password 	= trim($request->password);

    	if (Auth::attempt(['email' => $email, 'password' => $password]))
	        {   
                // $arUser = Auth::user();
                // if($arUser['roles'] ==){
                //    return redirect()->route('public.flowers.flowers');

                // }else{ 
	               // return redirect()->route('admin.flowers.flowers');
                // }
                return redirect()->route('admin.index');
	        }else
	        {
	        	$request ->Session()->flash('msg','Sai Username hoặc Password !!!');
	            return redirect()->back();

	        }
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/dang-nhap');
    }
}
