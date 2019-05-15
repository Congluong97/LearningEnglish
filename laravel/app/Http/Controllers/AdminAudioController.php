<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;
use App\Video;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;

class AdminAudioController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $videos=Video::all();
        return view('admin.index_audio',['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function anyData()
    {   
     $list=Audio::with([ 'video'])->orderBy('id', 'desc');

     return Datatables::of($list)
     ->addColumn('action',function($audio){
        return '<button title="Detail Audio" class="btn btn-info btnShow button1" data-id='.$audio["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
        <button title="Update Audio" class="btn btn-warning  btnEdit button1" data-id='.$audio["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
        <button title="Delete Audio" class="btn btn-danger b btnDelete button1" data-id='.$audio["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
    })
     ->editColumn('id_video', function($audio) {
        return $audio->Video->name;
    })
     ->setRowId('id')
     
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

        $data = $request->all();

       // kiem tra audio
        if ($request->hasFile('link')) {
            $date = date('YmdHis', time());

            $link = $request->file('link');

//             echo 'Kiểu files: ' . $file->getMimeType();
                //lấy tên file
            $name = $link->getClientOriginalName();

                //lấy đuôi file
            // $extension = '.'.$link[0]->getClientOriginalExtension();

            $file_name = $name;

            $link->storeAs('public/audios',$date.$file_name);

            $link = 'storage/audios/'.$date.$file_name;

        }

        $audio=array(
            'name' => $data['name'],
            'text' => $data['text'],
            'id_video' => $data['video'],
            'link' => $link
            
        );
        $exist=Audio::where([
                                ['name','=',$data['name'] ],
                                ['id_video','=',$data['video'] ]
                        ])->first();
        if (!isset($exist)) {
            return Audio::create($audio);
        }else{
            return response($content = 'error', $status = 400);
        }
            
        
        
        // return redirect()->route('admin_audio.index',[
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
     $audio = Audio::findOrFail($id);
     if ($audio) {
        $audio['video'] = Video::find($audio['id_video'])['name'];
    }
    // dd($audio);
    return $audio;     
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
       $data = $request->all();
         // dd($data);
       // kiem tra audio
        if ($request->hasFile('link')) {
            
            $date = date('YmdHis', time());

            $link = $request->file('link');

//             echo 'Kiểu files: ' . $file->getMimeType();
                //lấy tên file
            $name = $link->getClientOriginalName();

                //lấy đuôi file
            // $extension = '.'.$link[0]->getClientOriginalExtension();

            $file_name = $name;

            $link->storeAs('public/audios',$date.$file_name);

            $link = 'storage/audios/'.$date.$file_name;

            // dd($link[0]);

              
        }

        $audio=array(
            'name' =>$data['name'],
            'text' =>$data['text'],
          
            'id_video' => $data['video'],
            'link' =>$link
            
        );
     $res=Audio::find($id)->update($audio);
     if ($res==true) {
        return  Audio::find($id);
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

        $res = Audio::find($id);
        unlink($link);
        $res->delete();
        if ($res==true) {
            
            return response(['success'], 200);
        } else {
            return response([],400);
        }    
    }
}
