<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Audio;

class Single_lecturesController extends Controller
{
    //
     public function getSingle_lectures()
    {
        $video = Video::select('id','name','link','description','time','id_lecture')->get()->ToArray();
        $audio = Audio::select('id','name','id_video','link','text')->get()->ToArray();
        $audio1= Audio::where('id_video',1)->get();
       return view('user.single_lectures',compact('video','audio','audio1'));
    }
}
