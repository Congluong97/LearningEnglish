<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Audio;

class Single_lecturesController extends Controller
{
    //
     public function getSingle_lectures($id)
    {
        $data['video'] = Video::where('id_lecture',$id)->get();
        $id_video = $data['video'][0]->id;
        $data['audio'] = Audio::where('id_video',$id_video)->get();
       return view('user.single_lectures',$data);
    }
}
