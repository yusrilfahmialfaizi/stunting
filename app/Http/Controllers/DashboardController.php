<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
        if ($request->session()->get('status') == 'login' && $request->session()->get('jabatan') == 'petugas' ){
            return redirect('/dashboard');
        };
        return view('content/main/dashboard_luar');
    }
    public function dashboard(Request $request){
        if ($request->session()->get('status') != 'login' && $request->session()->get('jabatan') != 'petugas' ){
            return redirect('/');
        };
        return view('content/main/dashboard');
    }
}
