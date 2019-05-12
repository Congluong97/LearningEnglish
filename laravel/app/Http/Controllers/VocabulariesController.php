<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vocabulary;

class VocabulariesController extends Controller
{

    public function getVocabularies()
    {
    	$vocabularies=Vocabulary::all();
        return view('user.vocabularies',['vocabularies'=>$vocabularies] );
    }

}
