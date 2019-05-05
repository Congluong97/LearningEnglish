<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Http\Requests\LoginRequest;
use  App\Http\Requests\UserRequest; 	

use App\Level_User;
use App\User;
use DB;

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

	public function listUser(){
		$data['listUser'] = DB::table('user')->join('level_user','user.level','level_user.id_level_user')->get();
		return view('admin.user.listuser',$data);
	}

	public function getAddUser(){
		$data['leveluser'] = Level_User::all();
		return view('admin.user.adduser',$data);
	}

	public function postAddUser(UserRequest $request){
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->level = $request->level;
		$user->save();
		return back()->with('error','Thêm thành công');
	}

	public function getEditUser($id){
		$data['user'] = User::find($id);
		$data['leveluser'] = Level_User::all();
		return view('admin.user.edituser',$data);
	}

	public function postEditUser(Request $request,$id){
		$this->validate($request,[
			'name'=>'required',				
		],[
			'name.required'=>'Bạn chưa nhập name',
		]);
		$user = User::find($id);
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
			$user->password = bcrypt($request->newpassword);
		}
		$user->level = $request->level;
		$user->save();
		return redirect('admin/user/list')->with('error','Sửa thành công');

	}


}
