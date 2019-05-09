<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Level_User;

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

	public function getProfile(){
		$user = Auth::user();
		$data['user'] = User::find($user->id);
		return view('user.profile',$data);
	}

	public function postProfile(Request $request){
		$this->validate($request,[
			'name'=>'required',				
		],[
			'name.required'=>'Bạn chưa nhập name',
		]);
		$user = User::find(Auth::user()->id);
		$user->name = $request->name;
		if($request->changePassword == "on" )
		{
			$this->validate($request,[
				'password'=>'required',
				'confirmpassword'=>'required|same:password'
			],[
				'password.required'=>'Bạn chưa nhập password mới',
				'confirmpassword.required'=>'Mật khẩu không khớp',
				'confirmpassword.same'=>'Mật khẩu không khớp'
			]);
			$user->password = bcrypt($request->password);
		}
		$user->save();
		return redirect($request->name.'/profile')->with('error','Thay đổi thành công');

	
	}
}
