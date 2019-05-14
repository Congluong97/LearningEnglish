<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Level;
use App\Lecture;

class LevelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getLevel1()
    {
    	$new_lecture=Lecture::where('id_level',1)->get();
    	$new_lession=Level::where('id',1)->get();
    	return view('user.level',compact('new_lession','new_lecture'));
    }
    public function getLevel($id){
        $data['lecture'] = Lecture::where('id_level',$id)->get();
        return view('user.lecture',$data);
    }
}
