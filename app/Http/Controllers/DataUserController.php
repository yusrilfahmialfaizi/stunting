<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illmuninate\Support\Facades\Auth;
use Hash;

class DataUserController extends Controller
{
    //
    function tambah_user(){
        $array_data = [
            'nama'      => 'Petugas Posyandu1',
            'jabatan'   => 'petugas',
            'username'  => 'petugas1',
            'password'  => Hash::make('petugas1')
        ];
        DB::table('tbl_user')->insert($array_data);
    }
}
