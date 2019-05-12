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
        $list=Vocabulary::with(['lecture'])->orderBy('id','desc');

        return Datatables::of($list)
        ->addColumn('action',function($vocabulary) {
            return '<button title="Detail Vocabulary" class="btn btn-info btnShow button1" data-id='.$vocabulary["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
            <button title="Update Vocabulary" class="btn btn-warning  btnEdit button1" data-id='.$vocabulary["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Vocabulary" class="btn btn-danger b btnDelete button1" data-id='.$vocabulary["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
        ->editColumn('id_lecture',function($vocabulary) {
             return $vocabulary->Lecture->name;
        })
         ->setRowId('id')
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
            'id_lecture' =>$data['lecture'], 
        );
        $excist=Vocabulary::where([ ['name','=',$data['name'] ],
                                    ['id_lecture','=',$data['lecture'] ] 
                                ])->first();
        // $excist2=Vocabulary::where('id_lecture','=',$data['lecture'] )->first();
        if (!isset($excist)) {
            return Vocabulary::create($vocab);
        }else{
            return response($content='error',$status=400);
        }
        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vocabulary=Vocabulary::find($id);
        // dd($vocabulary);
        if ($vocabulary) {
            $vocabulary['lecture'] = Lecture::find($vocabulary['id_lecture'])['name'];
        }
        // dd($vocabulary);
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
         return Vocabulary::find($id);
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

        $res=Vocabulary::find($id)->update();
        if ($res==true) {
            return  Vocabulary::find($id);
        }else{
            return response($content = 'error',$status = 400);
        }
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
