<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class AdminListController extends Controller
{    
    use RegistersUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index_admin');
    }

    public function anyData()
    {
        $list=Admin::orderBy('id','desc');

        return DataTables::of($list)
        ->addColumn('action', function($admin) {
            return '<button title="Detail Admin" class="btn btn-info btnShow button1" data-id='.$admin["id"].'><i class="fa fa-address-book" aria-hidden="true"></i></button>
            <button title="Update Admin" class="btn btn-warning  btnEdit button1" data-id='.$admin["id"].'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button title="Delete Admin" class="btn btn-danger b btnDelete button1" data-id='.$admin["id"].'><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
        })
        ->make(true);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $res=Admin::find($id)->delete();
        if ($res==true) {
            return response(['success'], 200);
        } else {
            return response([],400);
        }  
    }
}
