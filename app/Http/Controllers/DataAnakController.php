<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataAnakController extends Controller
{
    //
    function index(){
        $data['dataset'] = DB::table('tbl_anak')->get();
        return view("content/main/data_anak", $data);
    }
}
