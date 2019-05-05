<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Lecture;
use Yajra\Datatables\Datatables;
use Auth;

class AdminVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $lectures=Lecture::all();
        return view('admin.index_video',['lectures' => $lectures]);
    }

    public function anyData()
    {
        $list=Video::with(['lecture'])->orderBy('id','desc');

        return Datatables::of($list)
        
        ->addColumn('action',function($video){
            return '
            <button title="Detail video" class="btn btn-info btnShow button1" data-id='.$video["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
            <button title="Update video" class="btn btn-warning  btnEdit button1" data-id='.$video["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete video" class="btn btn-danger b btnDelete button1" data-id='.$video["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
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
        $data = $request->all();
            // dd($data);
        
       // kiem tra audio
//         if ($request->hasFile('link')) {
//             echo "";
//             $date = date('YmdHis', time());

//             $link = $request->file('link');

// //             echo 'Kiểu files: ' . $file->getMimeType();
//                 //lấy tên file
//             $name = $link[0]->getClientOriginalName();

//                 //lấy đuôi file
//             // $extension = '.'.$link[0]->getClientOriginalExtension();

//             $file_name = $name;

//             $link[0]->storeAs('public/video',$date.$file_name);

//             $link[0] = 'storage/video/'.$date.$file_name;

//             // dd($link[0]);

//               
//         }

        $video=array(
            'name' =>$data['name'],
            'description' =>$data['description'],
            'time' =>$data['time'],
            'id_lecture' => $data['lecture'],
            'link' =>$data['link']
            
        );
     // dd($audio);
        Video::create($video);
        
        return redirect()->route('admin_video.index',[
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
        $video=Video::findOrFail($id);
        if ($video) {
        $video['lecture'] = Lecture::find($video['id_lecture'])['name'];
    }
        return $video;
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
        $res = Video::find($id)->delete();
        if ($res==true) {
            return response(['success'], 200);
        } else {
            return response([],400);
        }    
    }
    
}
