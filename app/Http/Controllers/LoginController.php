<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        if ($request->session()->get('status') == 'login' || $request->session()->get('jabatan') == 'petugas' ){
            return redirect('/dashboard');
        }else if ($request->session()->get('status') == 'login' || $request->session()->get('jabatan') == 'admin' ) {
            # code...
            return redirect('/dashboard-admin');
        };
        return view('content/login/auth_login');
    }

    function auth(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $data = [
            'username'  => $username,
            'password'  => $password
        ];

        Auth::attempt($data);
        if (Auth::check()){
            $users = DB::table('users')
                ->where('username', $username)
                ->get();
            foreach ($users as $key => $value) {
                # code...
                $sesi = [
                    'id_user'   => $value->id_user,
                    'nama'      => $value->nama,
                    'jabatan'   => $value->jabatan,
                    'username'  => $value->username,
                    'status'    => 'login'       
                ];
                if ($value->jabatan == 'petugas') {
                    # code...
                    $request->session()->put($sesi);
                    return redirect('/dashboard');
                }else if ($value->jabatan == 'admin'){
                    $request->session()->put($sesi);
                    return redirect('/dashboard-admin');
                }
            }
        }else{
            return redirect()->back();
        }
    }

    function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
