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
<<<<<<< HEAD
   
    public function getLevel($id){
        $data['level']=Level::all();
        $data['lecture'] = Lecture::where('id_level',$id)->get();
=======
  
    public function getLevel($id){
        $data['lecture'] = $data['lecture'] = DB::table('videos')->join('lectures','lectures.id','=','videos.id_lecture')->where('id_level',$id)->get();
        $data['level'] = Level::all();
>>>>>>> 5ad702921d6e1f21b9e63ab72d265ffcc4da1d32
        return view('user.lecture',$data);
    }
}
