<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class Single_lecturesController extends Controller
{
    //
     public function getLevel1()
    {
       return view('user.single_lectures');
    }
}
