<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Event;
class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index_event');
    }

    public function anyData()
    {
        $list=Event::orderBy('id','desc');
        return Datatables::of($list)
        ->addColumn('action',function($event) {
            return '
            <button title="Update Audio" class="btn btn-warning  btnEdit button1" data-id='.$event["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Audio" class="btn btn-danger b btnDelete button1" data-id='.$event["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
        ->editColumn('image', function($event) {
            return '<img src="'. asset(\url($event->image)) .'"style="width:50px; height=50px;">';
        })
         ->setRowId('id')
        ->rawColumns(['image','action'])
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
         // kiem tra link
        if ($request->hasFile('image')) {
            $date = date('YmdHis', time());

            $image = $request->file('image');

//             echo 'Kiểu files: ' . $file->getMimeType();
                //lấy tên file
            $name = $image->getClientOriginalName();

                //lấy đuôi file
            $extension = '.'.$image->getClientOriginalExtension();

            $file_name = md5($request->name.$name).'_'. $date . $extension;;

            $image->storeAs('public/event',$file_name);

            $image = 'public/storage/event/'.$file_name;

        }
        $event = array(
            'name' =>$data['name'] , 
            'image' =>$image , 
            'detail' =>$data['detail'] , 
        );

        $excist=Event::where('name','=',$data['name'])->first();
        if (!isset($excist)) {
            return Event::create($event);
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
        $res=Event::find($id)->delete();
        if ($res==true) {

            return response(['success'], 200);
        } else {
            return response([],400);
        }    
    }
}
