<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Hash;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->session()->get('status') != 'login'){
            return redirect('/');
        }
        else if ($request->session()->get('jabatan') == 'petugas' ) {
            # code...
            return redirect('/dashboard');
        };
        $data['dataset'] = Users::all();
        return view('content/main/data_user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        if ($request->session()->get('status') != 'login'){
            return redirect('/');
        }
        else if ($request->session()->get('jabatan') == 'petugas' ) {
            # code...
            return redirect('/dashboard');
        };
        $model           = new Users;
        return view('content/main/tambah_data_user', compact('model'));
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
        $model = new Users;
        $model->nama        = $request->nama_user;
        $model->jabatan     = $request->jabatan;
        $model->username    = $request->username;
        $password           = $request->password;
        $model->password    = Hash::make($password);
        $model->save();
        return \redirect('data-user');
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
    public function edit(Request $request, $id)
    {
        //
        if ($request->session()->get('status') != 'login'){
            return redirect('/');
        }
        else if ($request->session()->get('jabatan') == 'petugas' ) {
            # code...
            return redirect('/dashboard');
        };
        $model           = Users::find($id);;
        return view('content/main/edit_data_user', compact('model'));
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
        $model = Users::find($id);
        $model->nama        = $request->nama_user;
        $model->username    = $request->username;
        $password           = $request->password;
        $model->password    = Hash::make($password);
        $model->save();
        return \redirect('data-user');
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
        $model = Users::find($id);
        $model->delete();
        return response()->json([
            'message' => 'sukses'
        ]);
    }
}
