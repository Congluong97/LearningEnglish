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
   
    public function getLevel($id){
        $data['level']=Level::all();
        $data['lecture'] = Lecture::where('id_level',$id)->get();
        return view('user.lecture',$data);
    }
}
