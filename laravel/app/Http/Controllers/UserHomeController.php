<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Level_User;
use App\History;
use App\Event;
use App\Video;
use App\Lecture;
use App\Level;
use DB;
use  App\Http\Requests\UserRequest;

class UserHomeController extends Controller
{
	public function getHome(){
		$data['level'] = Level::all();
		$data['video'] = Video::take(1)->get();
    	// $data['lectures'] = Lecture::take(3)->get();
		$data['lectures'] = DB::table('videos')->join('lectures','lectures.id','=','videos.id_lecture')->take(3)->get();
		$data['event'] = Event::take(3)->get();
		return view('user.index',$data);
	}
	public function getLogin(){
		$data['level'] = Level::all();
		return view('user.login',$data);
	}

	public function postLogin(Request $request){
		$isLogin = [
			'email'=>$request->email,
			'password'=>$request->password
		];
		
		if(Auth::attempt($isLogin)){
			
			return redirect('home');
		}else{
			return redirect('login')->with('error','Tài khoản hoặc mật khẩu chưa đúng');
		}
	}

	public function getHomeLogin(){
		$data['level'] = Level::all();
		$data['video'] = Video::take(1)->get();
    	// $data['lectures'] = Lecture::take(3)->get();
		$data['lectures'] = DB::table('videos')->join('lectures','lectures.id','=','videos.id_lecture')->take(3)->get();
		$data['event'] = Event::take(3)->get();
		return view('user.index',$data);

	}

	public function logout(){
		Auth::logout();
		return redirect()->intended('home');	
	}

	public function getProfile(){
		$data['level'] = Level::all();
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
	public function getRegister(){
		$data['level'] = Level::all();
		return view('user.register',$data);
	}
	public function postRegister(UserRequest $request){
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->level = 2;
		
		if($user->save()){
			return redirect('login');
		}
	}

	public function getHistory (){
		$data['level'] = Level::all();
		$user = Auth::user();
		if($user){
			$data['history'] = History::where('id_user',$user->id)->orderBy('id','desc')->get();
		}
		return view('user.history',$data);
	}

	public function search(Request $request){
		if($request->get('query'))
		{
			$query = $request->get('query');
			$data = DB::table('lectures')
			->where('name', 'LIKE', "%{$query}%")
			->get();
			$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
			foreach($data as $row)
			{
				$output .= '
				<li><a href="single_lectures/'. $row->id .'">'.$row->name.'</a></li>
				';
			}
			$output .= '</ul>';
			echo $output;
		}
	}
}
