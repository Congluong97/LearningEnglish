<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Audio;
<<<<<<< HEAD
use App\Vocabulary;
use App\Lecture;


class Single_lecturesController extends Controller
{

    public function getVocabulary($id)
    {
    	$new_lecture=Lecture::where('status',1)->get();
    	$new_word=Vocabulary::where('id_lecture',$id)->get();
    	return view('user.single_lectures',compact('new_lecture','new_word'));
=======

class Single_lecturesController extends Controller
{
    //
     public function getSingle_lectures($id)
    {
<<<<<<< HEAD
        $data['video'] = Video::where('id_lecture',$id)->get();
        $id_video = $data['video'][0]->id;
        $data['audio'] = Audio::where('id_video',$id_video)->get();
       return view('user.single_lectures',$data);
=======
        $video = Video::select('id','name','link','description','time','id_lecture')->get()->ToArray();
        $audio = Audio::select('id','name','id_video','link','text')->get()->ToArray();
        $audio1= Audio::where('id_video',1)->get();
       return view('user.single_lectures',compact('video','audio','audio1'));
>>>>>>> 5527ee9e156e9a880d05f98fc68b8ba3e550a7f1
>>>>>>> 62a6f6f07979ceaebbad89a9bce6842b0bf1bd2f
    }
}
