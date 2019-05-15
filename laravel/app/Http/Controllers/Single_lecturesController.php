<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Audio;
use App\Vocabulary;
use App\Lecture;
use App\Level;
use Auth;
use App\History;

class Single_lecturesController extends Controller
{

	public function getSingle_lectures($id)
	{
		$data['level'] = Level::all();
		$data['top_lecture'] = Lecture::take(2)->get(); 
		$data['new_lecture']=Lecture::where('id',$id)->get();
		$data['new_word']=Vocabulary::where('id_lecture',$id)->get();
		$data['video'] = Video::where('id_lecture',$id)->get();
		
		$id_video = $data['video'][0]->id;
		
		
		$data['audio'] = Audio::where('id_video',$id_video)->get();
		if(Auth::check()){
			$history = new History;
			$history->id_lecture = $id;
			$history->name_lecture = $data['new_lecture'][0]->name;
			$history->id_user = Auth::user()->id;
			$history->created_at = date('Y-m-d H:i:s');
			$history->save();
		}
		return view('user.single_lectures',$data);
		// dd($data);
	}

	public function check(Request $request){
		// dd($request);
		$str = preg_replace('/\s+/', '', $request->answer);
		$str = strtolower($str);
		$audio = Audio::where('id',$request->id_audio)->get();
		$text = preg_replace('/\s+/', '', $audio[0]->text);
		$text = strtolower($text);
		
		if(strcmp($str,$text) == 0){
         	// return  strcmp($str,$text);
			return  response($content='true');
		}else{
			return  response($content='false');
		}
		
	}
}
