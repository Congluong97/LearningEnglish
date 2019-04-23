<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;
use Yajra\Datatables\Datatables;
class AdminLectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index_lecture');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function anyData()
    {           $list=Lecture::orderBy('id','desc');
        return Datatables::of($list)
        ->addColumn('action',function($lecture) {
            return '<button title="Detail Lecture" class="btn btn-info btnShow button1" data-id='.$lecture["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
            <button title="Update Lecture" class="btn btn-warning  btnEdit button1" data-id='.$lecture["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Lecture" class="btn btn-danger b btnDelete button1" data-id='.$lecture["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
          ->editColumn('image', function($lecture) {
            return '<img src="'. asset(\url($lecture->image)) .'"style="width:50px; height=50px;">';
        })

        ->setRowId('id')
        ->rawColumns(['image','action'])
        ->make(true);
    }
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
        // dd($data);
        if ($request->hasFile('image')) {
            $date=date('YmdHis',time());

            $image=$request->file('image');

            $name=$image[0]->getClientOriginalName();

            $extension='.'.$image[0]->getClientOriginalExtension();

            $file_name = md5($request->name.$name).'_'. $date . $extension;

            $image[0]->storeAs('public/images',$file_name);

            $image[0]='public/storage/images/'.$file_name;
        }

        $lecture = array('name' =>$data['name'] ,
           'image' =>$image[0] ,
           'status' =>$data['status'] 
       );
        // dd($lecture);
        Lecture::create($lecture);

        return redirect()->route('admin_lecture.index',[
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
        $res = Lecture::find($id)->delete();
        if ($res==true) {
            return response(['success'], 200);
        } else {
            return response([],400);
        }  
    }
}
