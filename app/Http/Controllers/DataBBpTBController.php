<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBBpTBController extends Controller
{
    //
    function index(){
        $data['dataset'] = DB::table('tbl_bbtb')->get();
        return view("content/main/data_BBpTB", $data);
    }
}
