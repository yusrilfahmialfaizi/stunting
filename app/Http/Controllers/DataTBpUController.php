<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataTBpUController extends Controller
{
    //
    function index(Request $request){
        if ($request->session()->get('status') != 'login' && $request->session()->get('jabatan') != 'petugas' ){
                return redirect('/');
        };
        $data['dataset'] = DB::table('tbl_pbu')->get();
        return view("content/main/data_PBpU", $data);
    }
}
