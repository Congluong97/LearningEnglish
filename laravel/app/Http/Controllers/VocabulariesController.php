<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vocabulary;

class VocabulariesController extends Controller
{

    public function getVocabularies()
    {
    	$data['vocabularies']=Vocabulary::all();
        return view('user.vocabularies',$data);
    }

    public function getInstructor(){
    	return view('user.instructors');
    }

}
