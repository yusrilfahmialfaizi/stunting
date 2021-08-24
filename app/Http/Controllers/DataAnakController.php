<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataAnakController extends Controller
{
    //
    function index(Request $request){
        if ($request->session()->get('status') != 'login' && $request->session()->get('jabatan') != 'petugas' ){
                return redirect('/');
        };
        $data['dataset'] =  DB::table('tbl_anak')
                ->join('tbl_desa', 'tbl_anak.id_desa', '=', 'tbl_desa.id_desa')
                ->select('tbl_anak.*', 'tbl_desa.nama_desa')    
                ->get();
        return view("content/main/data_anak", $data);
    }
    function tambah_anak(Request $request){
        if ($request->session()->get('status') != 'login' && $request->session()->get('jabatan') != 'petugas' ){
                return redirect('/');
        };
        return view("content/main/tambah_anak");
    }

    function simpan(Request $request){

        $nama_anak          = $request->nama_anak;
        $nama_ibu           = $request->nama_ibu;
        $nama_ayah          = $request->nama_ayah;
        $jenis_kelamin      = $request->jenis_kelamin;
        $tgl_lahir          = $request->tgl_lahir;
        $desa               = $request->desa;
        $dusun              = $request->dusun;
        $rt                 = $request->rt;
        $rw                 = $request->rw;
        $posyandu           = $request->posyandu;

        date_default_timezone_set('Asia/Jakarta');
        // $hari  = date("Ymd");
        // echo $hari;
        $query = DB::table("tbl_anak")
                    ->select(\DB::raw("max(RIGHT(tbl_anak.id_anak,3)) As id_anak"))
                    ->get();
        print_r(intVal($query[0]->id_anak)); 
        // $query = $this->db->query("SELECT MAX(RIGHT(tbl_hasil.kode_periksa,3)) AS kode_periksa FROM tbl_hasil WHERE (SELECT DISTINCT LEFT(kode_periksa, 8) AS kode_periksa From tbl_hasil WHERE LEFT(kode_periksa, 8) = '$hari') = '$hari' ORDER BY kode_periksa DESC LIMIT 1");

        if (intVal($query[0]->id_anak) > 0) {
            # code...
            $id = intVal($query[0]->id_anak) + 1;
        } else {
            $id = 1;
        }
        $batas = str_pad($id, 3, "0", STR_PAD_LEFT);
        $id_anak = $jenis_kelamin.date("Ymd"). $batas;
        echo $id_anak;

        $data = [
            'id_anak'       => $id_anak,
            'nama_anak'     => $nama_anak,
            'nama_ayah'     => $nama_ayah,
            'nama_ibu'      => $nama_ibu,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_lahir'     => $tgl_lahir,
            'desa'          => $desa,
            'dusun'         => $dusun,
            'rw'            => $rw,
            'rt'            => $rt,
            'posyandu'      => $posyandu
        ];
        $insert = DB::table('tbl_anak')->insert($data);
        if ($insert) {
            # code...
            return redirect()->action([DataAnakController::class, 'index']);
        }
    }
}
