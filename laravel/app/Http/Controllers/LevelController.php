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
    	$new_lecture=Lecture::where('status',1)->get();
    	$new_lession=Level::where('id',1)->get();
    	return view('user.level',compact('new_lession','new_lecture'));
    }
    public function getLevel2()
    {
    	$new_lecture=Lecture::where('status',1)->get();
    	$new_lession=Level::where('id',2)->get();
    	return view('user.level',compact('new_lession','new_lecture'));
    }
    public function getLevel3()
    {
    	$new_lecture=Lecture::where('status',1)->get();
    	$new_lession=Level::where('id',3)->get();
    	return view('user.level',compact('new_lession','new_lecture'));
    }
    public function getLevel4()
    {
    	$new_lecture=Lecture::where('status',1)->get();
    	$new_lession=Level::where('id',4)->get();
    	return view('user.level',compact('new_lession','new_lecture'));
    }
    public function getLevel5()
    {
    	$new_lecture=Lecture::where('status',1)->get();
    	$new_lession=Level::where('id',5)->get();
    	return view('user.level',compact('new_lession','new_lecture'));
    }
}
