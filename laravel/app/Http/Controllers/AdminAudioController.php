<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;
use Yajra\Datatables\Datatables;

class AdminAudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index_audio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function anyData()
    {   date_default_timezone_set('Asia/Ho_Chi_Minh');
        $list=Audio::orderBy('id','desc');
        return Datatables::of($list)
        ->addColumn('action',function($audio){
            return '
            <button title="Detail Audio" class="btn btn-info btnShow button1" data-id='.$audio["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
            <button title="Update Audio" class="btn btn-warning  btnEdit button1" data-id='.$audio["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Audio" class="btn btn-danger b btnDelete button1" data-id='.$audio["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
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
        echo "string";
      $data = $request->all();
            // dd($data);

            
       // kiem tra audio
        if ($request->hasFile('link')) {
            echo "";
            $date = date('YmdHis', time());

            $link = $request->file('link');

//             echo 'Kiểu files: ' . $file->getMimeType();
                //lấy tên file
            $name = $link[0]->getClientOriginalName();

                //lấy đuôi file
            // $extension = '.'.$link[0]->getClientOriginalExtension();

            $file_name = $name;

            $link[0]->storeAs('public/audios',$date.$file_name);

            $link[0] = 'storage/audios/'.$date.$file_name;

            // dd($link[]);

            // dd($audio['link']);    

          
        }

     $audio=array(
        'name' =>$data['name'],
        'text' =>$data['text'],
        'id_video' => '1',
        'link' =>$link[0]
        
    );
          Audio::create($audio);
    
    return redirect()->route('admin_audio.index',[
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
         $audio = Audio::findOrFail($id);
        // if ($product){
        //     $product['brand'] = Brand::find($product['brand_id'])['name'];
        //     $product['category'] = Category::find($product['category_id'])['name'];
        //     $thumbnail = GalleryImage::where('product_id','=',$product['id'])->first()['link']; 
        //     if (!$thumbnail) {
        //         $product['thumbnail'] = 'storage/products/shoes_default.png';
        //     } else {
        //         $product['thumbnail'] = $thumbnail;
        //     }
        // }  
        
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
        $res = Audio::find($id)->delete();
            if ($res==true) {
                return response(['success'], 200);
            } else {
                return response([],400);
            }    
    }
}
