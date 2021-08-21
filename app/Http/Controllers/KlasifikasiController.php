<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlasifikasiController extends Controller
{
    //
    function index(){
        // if ($request->session()->get('status') != 'login'){
        //         return redirect('/');
        //     };
        // return view('contents/main/analisis');
        return view('content/main/Zscore');
    }

    function zscore(Request $request)
    {

        $tgl_lahir = $request->tgl_lahir;
        $awal  = date_create($tgl_lahir);
        $akhir = date_create(); // waktu sekarang
        $diff  = date_diff( $awal, $akhir );
        
        // echo "<pre>";
        // echo 'Selisih waktu: ';
        // echo $diff->y . ' tahun, ';
        // echo $diff->m . ' bulan, ';
        // echo $diff->d . ' hari, ';
        // echo $diff->h . ' jam, ';
        // echo $diff->i . ' menit, ';
        // echo $diff->s . ' detik, ';
        // // Output: Selisih waktu: 28 tahun, 5 bulan, 9 hari, 13 jam, 7 menit, 7 detik

        // echo 'Total selisih hari : ' . $diff->days;
        // echo 'Total selisih hari : ' . $umur;
        
        
        // echo "</pre>";
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
        $umur           = ($diff->y *12) + $diff->m;
        $BB             = $request->bb;
        $TB             = $request->tb;
        $IMT            = $BB/(pow(($TB/100),2));
        $jenis_kelamin  = "L";
        $BBpU           = DB::table('tbl_bb_u')->get();
        $PBpU           = DB::table('tbl_pbu')->get();
        $BBpPB          = DB::table('tbl_bbpb')->get();
        $BBpTB          = DB::table('tbl_bbtb')->get();
        $IMTpU          = DB::table('tbl_imtu')->get();
        foreach ($BBpU as $key => $value) {

            // print_r($value->umur);
            if ($umur == $value->umur) {
                if ($jenis_kelamin == $value->jenis_kelamin) {
                    # code..
                    if ($BB > $value->median) {
                        $zscoreBBpU = ($BB - $value->median)/ ($value->p1SD - $value->median);
                        // echo $zscore;
                    }else{
                        $zscoreBBpU = ($BB - $value->median)/ ($value->median - $value->m1SD);
                    }
                }
            }

        }
        foreach ($PBpU as $key => $value) {

            // print_r($value->umur);
            if ($umur == $value->umur) {
                if ($jenis_kelamin == $value->jenis_kelamin) {
                    # code..
                    if ($TB > $value->median) {
                        $zscoreTBpU = ($TB - $value->median)/ ($value->p1SD - $value->median);
                        // echo $zscore;
                    }else{
                        $zscoreTBpU = ($TB - $value->median)/ ($value->median - $value->m1SD);
                    }
                }
            }

        }
        if ($umur < 24) {
            foreach ($BBpPB as $key => $value) {
    
                // print_r($value->umur);
                if ($TB == $value->pb) {
                    if ($jenis_kelamin == $value->jenis_kelamin) {
                        # code...
                        if ($BB > $value->median) {
                            $zscoreBBpTB = ($BB - $value->median)/ ($value->p1SD - $value->median);
                            // echo $zscore;
                        }else{
                            $zscoreBBpTB = ($BB - $value->median)/ ($value->median - $value->m1SD);
                        }
                    }
                }
    
            }
            # code...
        }elseif ($umur > 24 && $umur <= 60 ) {
            foreach ($BBpTB as $key => $value) {
    
                // print_r($value->umur);
                if ($TB == $value->tb) {
                    if ($jenis_kelamin == $value->jenis_kelamin) {
                        # code...
                        if ($BB > $value->median) {
                            $zscoreBBpTB = ($BB - $value->median)/ ($value->p1SD - $value->median);
                        }else{
                            $zscoreBBpTB = ($BB - $value->median)/ ($value->median - $value->m1SD);
                        }
                    }
                }
    
            }
            # code...
        }
        foreach ($IMTpU as $key => $value) {

            $IMT = round($IMT,3);
            if ($umur == $value->umur) {
                if ($jenis_kelamin == $value->jenis_kelamin) {
                    # code..
                    if ($IMT > $value->median) {
                        $zscoreIMTpU = ($IMT - $value->median)/ ($value->p1SD - $value->median);
                        // echo $zscore;
                    }else{
                        $zscoreIMTpU = ($IMT - $value->median)/ ($value->median - $value->m1SD);
                    }
                }
            }

        }
        // echo $zscoreBBpU;
        if ($zscoreBBpU < -3) {
            # code...

            // echo "Berat Badan Sangat Kurang";
            $BBU =  "Berat Badan Sangat Kurang";

        }elseif ($zscoreBBpU >= -3 && $zscoreBBpU < -2) {
            # code...

            // echo "Berat Badan Kurang";
            $BBU =  "Berat Badan Kurang";

        }elseif ($zscoreBBpU >= -2 && $zscoreBBpU <= 1) {
            # code...

            // echo "Berat Badan Normal";
            $BBU =  "Berat Badan Normal";

        }elseif ($zscoreBBpU > 1 ) {

            // echo "Resiko Berat Badan Lebih";
            $BBU = "Resiko Berat Badan Lebih";

        }
        // echo $zscoreTBpU;
        if ($zscoreTBpU < -3) {
            # code...

            // echo "Sangat Pendek";
            $TBU = "Sangat Pendek";

        }elseif ($zscoreTBpU >= -3 && $zscoreTBpU < -2) {
            # code...

            // echo "Pendek";
            $TBU = "Pendek";

        }elseif ($zscoreTBpU >= -2 && $zscoreTBpU <= 3) {
            # code...

            // echo "Normal";
            $TBU = "Normal";

        }elseif ($zscoreTBpU > 3 ) {

            // echo "Tinggi";
            $TBU = "Tinggi";

        }
        // echo $zscoreBBpTB;
        if ($zscoreBBpTB < -3) {

            // echo "Gizi Buruk";
            $BBTB = "Gizi Buruk";

            # code...
        }elseif ($zscoreBBpTB >= -3 && $zscoreBBpTB < -2) {

            $BBTB = "Gizi Kurang";
            // echo "Gizi Kurang";

            # code...
        }elseif ($zscoreBBpTB >= -2 && $zscoreBBpTB <= 1) {
            # code...

            $BBTB = "Gizi Baik / Normal";
            // echo "Gizi Baik / Normal";

        }elseif ($zscoreBBpTB > 1 && $zscoreBBpTB <= 2) {

            $BBTB = "Beresiko Gizi Lebih";
            // echo "Beresiko Gizi Lebih";

        }elseif ($zscoreBBpTB > 2 && $zscoreBBpTB <= 3) {
            # code...

            $BBTB = "Gizi Lebih";
            // echo "Gizi Lebih";

        }elseif ($zscoreBBpTB > 3) {
            # code...

            $BBTB = "Obesitas";
            // echo "Obesitas";

        }
        // echo $zscoreIMTpU;
        if ($zscoreIMTpU < -3) {
            # code...
            $IMTU =  "Gizi Buruk";
        }elseif ($zscoreIMTpU >= -3 && $zscoreIMTpU < -2) {
            # code...

            $IMTU =  "Gizi Kurang";
            // echo "Gizi Kurang";

        }elseif ($zscoreIMTpU >= -2 && $zscoreIMTpU <= 1) {
            # code...

            $IMTU = "Gizi Baik / Normal";
            // echo "Gizi Baik / Normal";

        }elseif ($zscoreIMTpU > 1 && $zscoreIMTpU <= 2) {

            $IMTU = "Beresiko Gizi Lebih";
            // echo "Beresiko Gizi Lebih";

        }elseif ($zscoreIMTpU > 2 && $zscoreIMTpU <= 3) {

            // echo "Gizi Lebih";
            $IMTU = "Gizi Lebih";

            # code...
        }elseif ($zscoreBBpTB > 3) {

            $IMTU = "Obesitas";
            // echo "Obesitas";

            # code...
        }
        $hasil = [
            'nama_anak'     => $nama_anak,
            'nama_ayah'     => $nama_ayah,
            'nama_ibu'      => $nama_ibu,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_lahir'     => $tgl_lahir,
            'desa'          => $desa,
            'dusun'         => $dusun,
            'rw'            => $rw,
            'rt'            => $rt,
            'posyandu'      => $posyandu,
            'BB'            => $BB,
            'TB'            => $TB,
            'IMT'           => $IMT,
            'ZScore_BBpU'   => round($zscoreBBpU, 3),
            'ZScore_TBpU'   => round($zscoreTBpU, 3),
            'ZScore_BBpTB'  => round($zscoreBBpTB, 3),
            'ZScore_IMTpU'  => round($zscoreIMTpU, 3),
            'BBU'           => $BBU,
            'TBU'           => $TBU,
            'BBTB'          => $BBTB,
            'IMTU'          => $IMTU
        ];
        $data['hasil'] = $hasil;
        // print_r($hasil);
        return view('content/main/hasil_zscore', $data);
    }
}