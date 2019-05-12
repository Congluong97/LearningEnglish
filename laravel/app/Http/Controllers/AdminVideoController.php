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
        ->editColumn('id_lecture', function($video) {
            return $video->Lecture->name;
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
       // kiem tra audio
        if ($request->hasFile('link')) {
            echo "";
            $date = date('YmdHis', time());

            $link = $request->file('link');

//             echo 'Kiểu files: ' . $file->getMimeType();
                //lấy tên file
            $name = $link->getClientOriginalName();

                //lấy đuôi file
            // $extension = '.'.$link[0]->getClientOriginalExtension();

            $file_name = $name;

            $link->storeAs('public/video',$date.$file_name);

            $link = 'storage/video/'.$date.$file_name;

            // dd($link[0]);

              
        }

        $video=array(
            'name' =>$data['name'],
            'description' =>$data['description'],
            'time' =>$data['time'],
            'id_lecture' => $data['lecture'],
            'link' =>$link
            
        );
        $excist=Video::where([
            ['name','=',$data['name']],
            ['id_lecture','=',$data['lecture']]
        ])->first();

        if (!isset($excist)) {
            return Video::create($video);
        }else{
            return response($content = 'error', $status = 400);
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
        $video = Video::findOrFail($id);
        dd($video);
      if ($video) {
        $video['lecture'] = Video::find($video['id_video'])['name'];
    }
    // dd($audio);
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
        $video= Video::find($id);
        // dd($video);
        return $video;
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
     $res=Video::find($id)->update();
     if ($res==true) {
        return  Video::find($id);
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
        $res = Video::find($id)->delete();
        if ($res==true) {
            return response(['success'], 200);
        } else {
            return response([],400);
        }    
    }
    
}
