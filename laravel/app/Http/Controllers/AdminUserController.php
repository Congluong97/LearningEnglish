<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index_user');
    }

    public function anyData()
    {
        $list=User::orderBy('id','desc');
        return Datatables::of($list)
        ->addColumn('action',function($user) {
            return '<button title="Detail Audio" class="btn btn-info btnShow button1" data-id='.$user["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
            <button title="Update Audio" class="btn btn-warning  btnEdit button1" data-id='.$user["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Audio" class="btn btn-danger b btnDelete button1" data-id='.$user["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';

        })
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
          $user= array(
            'name' => $data['name'],
            'email' => $data['email'],
            'level' => $data['level'],
            'password' => Hash::make($data['password']),
            
        );
        return User::create($user);
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
        //
    }
}
