<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lecture;
use App\Level;
use App\Video;
use DB;


class LectureController extends Controller
{

	public function getLecture()
	{
		$data['lecture'] = DB::table('videos')->join('lectures','lectures.id','=','videos.id_lecture')->get();
		$data['level'] = Level::all();
		return view('user.lecture', $data);
	}

}
