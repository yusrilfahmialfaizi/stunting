<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetasebaranController extends Controller
{
    //
    public function index(){
        return view('content/main/peta-sebaran');
    }
}
