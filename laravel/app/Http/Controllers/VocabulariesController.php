<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vocabulary;

class VocabulariesController extends Controller
{

    public function getVocabularies()
    {
    	$vocabulary=Vocabulary::all();
        return view('user.vocabularies', compact('vocabulary'));
    }

}
