<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetasebaranController extends Controller
{
    //
    public function index(Request $request){
        if ($request->session()->get('status') != 'login'){
                return redirect('/');
        };
        return view('content/main/peta-sebaran');
    }
}
