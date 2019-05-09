<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Level;

class Level1Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getLevel1()
    {
       return view('user.level1');
    }
}
