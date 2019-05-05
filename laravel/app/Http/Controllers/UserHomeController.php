<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function getHome(){
    	return view('user.index');
    }
    public function getLogin(){
    	return view('admin.login');
    }

    public function postLogin(Request $request){
    	$isLogin = [
			'email'=>$request->email,
			'password'=>$request->password
		];
		if($request->remember = 'Remember Me'){
			$remember = true;
		}else{
			$remember = false;
		}
		if(Auth::attempt($isLogin,$remember)){
			
			return redirect('homelogin');
		}else{
			return redirect('login')->with('error','Tài khoản hoặc mật khẩu chưa đúng');
		}
    }

    public function getHomeLogin(){
    	return view('user.index-login');
    }

    public function logout(){
		Auth::logout();
		return redirect()->intended('home');	
	}
}
