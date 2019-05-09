<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lecture;

class LectureController extends Controller
{

    public function getLecture()
    {
        $new_lession=Lecture::where('status',1)->paginate(5);
        return view('user.lecture', compact('new_lession'));
    }

}
