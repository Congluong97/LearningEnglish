<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Audio;
use App\Vocabulary;
use App\Lecture;


class Single_lecturesController extends Controller
{

	public function getSingle_lectures($id)
	{
		$data['new_lecture']=Lecture::where('status',1)->get();
		$data['new_word']=Vocabulary::where('id_lecture',$id)->get();
		$data['video'] = Video::where('id_lecture',$id)->get();
		$id_video = $data['video'][0]->id;
		$data['audio'] = Audio::where('id_video',$id_video)->get();
		return view('user.single_lectures',$data);
	}

	public function check(Request $request){

		 $str = preg_replace('/\s+/', '', $request->answer);
		 $str = strtolower($str);
         $audio = Audio::where('id',$request->id_audio)->get();
         $text = preg_replace('/\s+/', '', $audio[0]->text);
         $text = strtolower($text);
         
         if(strcmp($str,$text) == 0){
         	// return  strcmp($str,$text);
         	return  response($content='success',$status=200);
         }else{
         	return  response($content='error',$status=400);
         }
         
	}
}
