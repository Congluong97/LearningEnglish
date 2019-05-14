<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vocabulary;
use Yajra\Datatables\Datatables;
use App\Admin;
class VocabulariesController extends Controller
{


	public function getVocabularies()
	{
		$vocabularies=Vocabulary::all();
		return view('user.vocabularies',['vocabularies'=>$vocabularies] );
	}

	public function anyData()
	{
		$list=Vocabulary::orderBy('name', 'asc');

		return Datatables::of($list)


		->editColumn('pronunciation', function($voc) {
			return '<audio src="'. asset(\url($voc->pronunciation)) .'" controls style="width:250px; height=50px;"></audio>';
		})
		->rawColumns(['pronunciation'])
		->setRowId('id')

		->make(true);
	}
	public function getInstructor(){
		$admins=Admin::all();
		return view('user.instructors',['admins' => $admins]);
	}

}
