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
    	return view('user.single_lectures',compact('new_lecture','new_word'));
    }
}
