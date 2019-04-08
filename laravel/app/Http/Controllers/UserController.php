<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Http\Requests\LoginRequest; 	

use App\Level_User;
use App\User;

class UserController extends Controller
{
	public function getProfile(){
		$user = Auth::user();
		$data['user'] = User::find($user->id);
		$data['level_user'] = Level_User::find($user->level);
		return view('admin.profile',$data);
	}

	public function postProfile(Request $request){
		

		$this->validate($request,[
			'name'=>'required',				
		],[
			'name.required'=>'Bạn chưa nhập name',
		]);
		$user = User::find(Auth::user()->id);
		$user->name = $request->name;
		$user->email = $request->email;
		if($request->changePassword == "on" )
		{
			$this->validate($request,[
				'newpassword'=>'required',
				'confirmpassword'=>'required|same:newpassword'
			],[
				'newpassword.required'=>'Bạn chưa nhập password mới',
				'confirmpassword.required'=>'Mật khẩu không khớp',
				'confirmpassword.same'=>'Mật khẩu không khớp'
			]);
			$user->password = bcrypt($request->newpassword);
		}
		$user->save();
		return redirect('admin/profile')->with('error','Thay đổi thành công');

		
	}
}
