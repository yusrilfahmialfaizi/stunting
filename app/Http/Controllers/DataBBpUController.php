<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBBpUController extends Controller
{
    //
    function index(Request $request){
        if ($request->session()->get('status') != 'login' ){
            return redirect('/');
        }
        else if ($request->session()->get('jabatan') == 'admin' ) {
            # code...
            return redirect('/dashboard-admin');
        };
        $data['dataset'] = DB::table('tbl_bb_u')->get();
        return view("content/main/data_BBpU", $data);
    }
}
