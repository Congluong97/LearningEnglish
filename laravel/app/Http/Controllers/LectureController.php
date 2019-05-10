<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lecture;
use App\Level;

class LectureController extends Controller
{

    public function getLecture()
    {
        $new_lession=Lecture::where('status',1)->paginate(5);
    	$new_level=Level::all();
        return view('user.lecture', compact('new_lession','new_level'));
    }

}
