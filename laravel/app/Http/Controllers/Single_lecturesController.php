<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Audio;
use App\Vocabulary;
use App\Lecture;


class Single_lecturesController extends Controller
{

	public function getVocabulary($id)
	{
		$new_lecture=Lecture::where('status',1)->get();
		$new_word=Vocabulary::where('id_lecture',$id)->get();
		//return view('user.single_lectures',compact('new_lecture','new_word'));
		dd($new_lecture);
	}

	public function getSingle_lectures($id)
	{

		$data['video'] = Video::where('id_lecture',$id)->get();
		$id_video = $data['video'][0]->id;
		$data['audio'] = Audio::where('id_video',$id_video)->get();
		return view('user.single_lectures',$data);
	}
}
