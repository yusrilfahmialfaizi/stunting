<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HasilZscore;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
        if ($request->session()->get('status') != 'login' ){
            return redirect('/');
        }
        else if ($request->session()->get('jabatan') == 'admin' ) {
            # code...
            return redirect('/dashboard-admin');
        };
        return view('content/main/dashboard');
    }
    public function dashboard(Request $request){
        if ($request->session()->get('status') != 'login'){
            return redirect('/');
        }
        else if ($request->session()->get('jabatan') == 'petugas' ) {
            # code...
            return redirect('/dashboard');
        };
        return view('content/main/dashboard_admin');
    }
    function landingpage(Request $request){
        if ($request->session()->get('status') == 'login' || $request->session()->get('jabatan') == 'petugas' ){
            return redirect('/dashboard');
        }else if ($request->session()->get('status') == 'login' || $request->session()->get('jabatan') == 'admin' ) {
            # code...
            return redirect('/dashboard-admin');
        };
        $data['desa']  =  HasilZscore::select(\DB::raw("nama_desa, longtd,latd,
                                    COUNT(CASE WHEN `bbpu` = 'Berat Badan Sangat Kurang' THEN 1 END) AS bb_sangat_kurang,
                                    COUNT(CASE WHEN `bbpu` = 'Berat Badan Kurang' THEN 1 END) AS bb_kurang,
                                    COUNT(CASE WHEN `bbpu` = 'Berat Badan Normal' THEN 1 END) AS bb_normal,
                                    COUNT(CASE WHEN `bbpu` = 'Risiko Berat Badan Lebih' THEN 1 END) AS bb_lebih,
                                    COUNT(CASE WHEN `tbpu` = 'Sangat Pendek' THEN 1 END) AS tb_sangat_pendek,
                                    COUNT(CASE WHEN `tbpu` = 'Pendek' THEN 1 END) AS tb_pendek,
                                    COUNT(CASE WHEN `tbpu` = 'Normal' THEN 1 END) AS tb_normal,
                                    COUNT(CASE WHEN `tbpu` = 'Tinggi' THEN 1 END) AS tb_tinggi,
                                    COUNT(CASE WHEN `bbptb` = 'Gizi Buruk' THEN 1 END) AS bbtb_gizi_buruk,
                                    COUNT(CASE WHEN `bbptb` = 'Gizi Kurang' THEN 1 END) AS bbtb_gizi_kurang,
                                    COUNT(CASE WHEN `bbptb` = 'Gizi Baik / Normal' THEN 1 END) AS bbtb_gizi_baik,
                                    COUNT(CASE WHEN `bbptb` = 'Berisiko Gizi Lebih' THEN 1 END) AS bbtb_risiko_gizi_lebih,
                                    COUNT(CASE WHEN `bbptb` = 'Gizi Lebih' THEN 1 END) AS bbtb_gizi_lebih,
                                    COUNT(CASE WHEN `bbptb` = 'Obesitas' THEN 1 END) AS bbtb_obesitas,
                                    COUNT(CASE WHEN `imtpu` = 'Gizi Buruk' THEN 1 END) AS imtu_gizi_buruk,
                                    COUNT(CASE WHEN `imtpu` = 'Gizi Kurang' THEN 1 END) AS imtu_gizi_kurang,
                                    COUNT(CASE WHEN `imtpu` = 'Gizi Baik / Normal' THEN 1 END) AS imtu_gizi_baik,
                                    COUNT(CASE WHEN `imtpu` = 'Berisiko Gizi Lebih' THEN 1 END) AS imtu_risiko_gizi_lebih,
                                    COUNT(CASE WHEN `imtpu` = 'Gizi Lebih' THEN 1 END) AS imtu_gizi_lebih,
                                    COUNT(CASE WHEN `imtpu` = 'Obesitas' THEN 1 END) AS imtu_obesitas
                                    "))
                                ->join('tbl_anak', 'hasil_zscore.id_anak', '=', 'tbl_anak.id_anak')
                                ->join('tbl_desa', 'tbl_anak.id_desa', '=', 'tbl_desa.id_desa')
                                ->join('users', 'hasil_zscore.id_user', '=', 'users.id_user')
                                ->groupby('nama_desa', 'longtd', 'latd')
                                ->get();
        return view('content/landingpage/index', $data);
    }
}
