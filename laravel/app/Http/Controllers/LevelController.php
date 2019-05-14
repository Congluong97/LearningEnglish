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
        $data['lecture'] = Lecture::where('id_level',$id)->get();
        $data['level'] = Level::all();
        return view('user.lecture',$data);
    }
}
