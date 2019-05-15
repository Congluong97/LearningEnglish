<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vocabulary;
use App\Level;
use Yajra\Datatables\Datatables;
use App\Admin;
class VocabulariesController extends Controller
{


	public function getVocabularies()
	{
		$data['level'] = Level::all();
		$data['vocabularies']=Vocabulary::all();
		return view('user.vocabularies',$data );
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
		$data['level'] = Level::all();
		$data['admins']=Admin::all();
		return view('user.instructors',$data);
	}

}
