<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lecture;
use App\Level;

class LectureController extends Controller
{

    public function getLecture()
    {
        $data['lecture'] = Lecture::all();
    	$data['level'] = Level::all();
        return view('user.lecture', $data);
    }

}
