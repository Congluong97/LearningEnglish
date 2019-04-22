<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vocabulary;
use App\Lecture;
use Yajra\Datatables\Datatables;


class AdminVocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $lectures=Lecture::all();
        return view('admin.index_vocabulary',['lectures' => $lectures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function anyData()
    {
        $list=Vocabulary::orderBy('id','desc');

        return Datatables::of($list)
        ->addColumn('action',function($vocabulary) {
            return '<button title="Detail Vocabulary" class="btn btn-info btnShow button1" data-id='.$vocabulary["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
            <button title="Update Vocabulary" class="btn btn-warning  btnEdit button1" data-id='.$vocabulary["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Vocabulary" class="btn btn-danger b btnDelete button1" data-id='.$vocabulary["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
        ->make(true);
    }
    public function store(Request $request)
    {
        $data=$request->all();
        // dd($data);
        $vocab = array(
            'name' =>$data['name'], 
            'mean' =>$data['mean'], 
            'pronunciation' =>$data['pronunciation'], 
            'id_lecture' =>'1', 
        );

        Vocabulary::create($vocab);
         return redirect()->route('admin_vocabulary.index',[
            'success' => 'Add success!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vocabulary=Vocabulary::findOrFail($id);
        if ($vocabulary) {
            $vocabulary['lecture']=Lecture::find($vocabulary['id_lecture'])['name'];
        }
        return $vocabulary;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Vocabulary::find($id)->delete();
        if($res==true){
            return response(['success'], 200);
        } else {
            return response([],400);
        }    

    }
}
