<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use App\Lecture;
use Yajra\Datatables\Datatables;

class AdminLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $lectures=Lecture::all();
        return view('admin.index_level',['lectures' => $lectures]);
    }

    public function anyData()
    {
        $list=Level::orderBy('id','desc');

        return Datatables::of($list)
        ->addColumn('action',function($level) {
            return '
           
            <button title="Delete Level" class="btn btn-danger b btnDelete button1" data-id='.$level["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
       
        ->setRowId('id')
        ->make(true);
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
    public function store(Request $request)
    {
        $data=$request->all();
       

        $level=[
            'name' =>$data['name'],
            
        ];
        $excist=Level::where('name','=',$data['name'] )->first();
        if (!isset($excist)) {
            return Level::create($level);
        }else{
            return response($content="error",$status=400);
        }
        
        // return redirect()->route('admin_level.index',[
        //     'success' => 'Add success!',
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
       $res = Level::find($id)->delete();
        if ($res==true) {
            return response(['success'], 200);
        } else {
            return response([],400);
        }
    }
}
