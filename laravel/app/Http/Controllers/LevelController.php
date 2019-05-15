<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Level;
use App\Lecture;
use App\Video;
use DB;

class LevelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getLevel($id){
        $data['lecture'] = $data['lecture'] = DB::table('videos')->join('lectures','lectures.id','=','videos.id_lecture')->where('id_level',$id)->get();
        $data['level'] = Level::all();

        return view('user.lecture',$data);
    }
}
