<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use  App\Http\Requests\LoginRequest;
use  App\Http\Requests\ProfileRequest; 	

//use Auth;
use App\Level_User;

class LoginController extends Controller
{

	public function getLogin(){
		return view('admin.login');
	}

	public function postLogin(LoginRequest $request){	
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
			
			return redirect('admin/home');
		}else{
			return redirect('admin/login')->with('error','Tài khoản hoặc mật khẩu chưa đúng');
		}
	}

	public function logout(){
		Auth::logout();
		return redirect()->intended('admin/login');	
	}

	
}
