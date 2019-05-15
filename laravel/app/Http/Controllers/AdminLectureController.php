<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;
use App\Level;
use Yajra\Datatables\Datatables;
class AdminLectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $levels=Level::all();
        return view('admin.index_lecture',['levels' => $levels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function anyData()
    {           $list=Lecture::with(['level'])->orderBy('id', 'desc');
        return Datatables::of($list)
        ->addColumn('action',function($lecture) {
            return '
            <button title="Update Lecture" class="btn btn-warning  btnEdit button1" data-id='.$lecture["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Lecture" class="btn btn-danger b btnDelete button1" data-id='.$lecture["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
          ->editColumn('image', function($lecture) {
            return '<img src="'. asset(\url($lecture->image)) .'"style="width:50px; height=50px;">';
        })
          ->editcolumn('id_level',function($lecture) {
            return $lecture->Level->name;
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

            $name=$image->getClientOriginalName();

            $extension='.'.$image->getClientOriginalExtension();

            $file_name =  $date . $extension;

            $image->storeAs('public/images',$file_name);

            $image='public/storage/images/'.$file_name;
        }

        $lecture = array('name' =>$data['name'] ,
                        'image' =>$image ,
                        'status' =>$data['status'],
                        'id_level' =>$data['level'] 
                            );

        $excist=Lecture::where( 'name','=',$data['name'] )->first();

        if (!isset($excist)) {
            return Lecture::create($lecture);
        }else{
            return $response($content='error',$status=400);
        }
        

        // return redirect()->route('admin_lecture.index',[
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
        return Lecture::find($id);
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
         $data=$request->all();
        // dd($data);
        if ($request->hasFile('image')) {
            $date=date('YmdHis',time());

            $image=$request->file('image');

            $name=$image->getClientOriginalName();

            $extension='.'.$image->getClientOriginalExtension();

            $file_name =  $date . $extension;

            $image->storeAs('public/images',$file_name);

            $image='public/storage/images/'.$file_name;
        }

        $lecture = array('name' =>$data['name'] ,
                        'image' =>$image ,
                        'status' =>$data['status'],
                        'id_level' =>$data['level'] 
                            );
         $res=Lecture::find($id)->update($lecture);
        if ($res==true) {
            return  Lecture::find($id);
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
        $res = Lecture::find($id)->delete();
        if ($res==true) {
            return response(['success'], 200);
        } else {
            return response([],400);
        }  
    }
}
