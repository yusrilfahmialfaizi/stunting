<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataZscoreController extends Controller
{
    //
    public function index(Request $request){
        if ($request->session()->get('status') != 'login'){
                return redirect('/');
        };
        // return view('contents/main/analisis');
        $data['zscore'] = DB::table('zscore')->get();
        return view('content/main/data_riwayat', $data);
    }
}
