<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataAnak;
use App\Models\BBpPB;
use App\Models\BBpTB;
use App\Models\BBpU;
use App\Models\IMTpU;
use App\Models\PBpU;

class KlasifikasiController extends Controller
{
    //
    function index(Request $request){
        if ($request->session()->get('status') != 'login' ){
            return redirect('/');
        }
        else if ($request->session()->get('jabatan') == 'admin' ) {
            # code...
            return redirect('/dashboard-admin');
        };
        // return view('contents/main/analisis');
        $data['anak'] = DataAnak::all();
        return view('content/main/Zscore', $data);
    }

    function zscore(Request $request)
    {

        $tgl_lahir      = $request->tgl_lahir;
        $awal           = date_create($tgl_lahir);
        $akhir          = date_create(); // waktu sekarang
        $diff           = date_diff( $awal, $akhir );
        $umur           = ($diff->y *12) + $diff->m;
        $id_anak        = $request->id_anak;
        $BB             = $request->bb;
        $TB             = $request->tb;
        $IMT            = $BB/(pow(($TB/100),2));
        $get = DataAnak::join('tbl_desa', 'tbl_anak.id_desa', '=', 'tbl_desa.id_desa')
                ->select('tbl_anak.*', 'tbl_desa.nama_desa')
                ->where('id_anak', $id_anak)    
                ->get();
        // print_r($get);
        foreach ($get as $key => $value) {
            $jenis_kelamin = $value->jenis_kelamin;
        }
        $ukur           = $request->ukur;
        $BBpU           = BBpU::all();
        $PBpU           = TBpU::all();
        $BBpPB          = BBpPB::all();
        $BBpTB          = BBpTB::all();
        $IMTpU          = IMTpU::all();
        foreach ($BBpU as $key => $value) {

            
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
                    if ($ukur == "telentang") {
                        if ($value->umur == "24a") {
                            if ($TB > $value->median) {
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->p1SD - $value->median);
                                // echo $zscore;
                            }else{
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->median - $value->m1SD);
                            }
                        }else{
                            if ($TB > $value->median) {
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->p1SD - $value->median);
                                // echo $zscore;
                            }else{
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->median - $value->m1SD);
                            }

                        }
                    }else{
                        if ($value->umur == "24b") {
                            if ($TB > $value->median) {
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->p1SD - $value->median);
                                // echo $zscore;
                            }else{
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->median - $value->m1SD);
                            }
                        }else{
                            if ($TB > $value->median) {
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->p1SD - $value->median);
                                // echo $zscore;
                            }else{
                                // echo $value->median;
                                $zscoreTBpU = ($TB - $value->median)/ ($value->median - $value->m1SD);
                            }

                        }

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
        }elseif ($umur >= 24 && $umur <= 60 ) {
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

            // echo "risiko Berat Badan Lebih";
            $BBU = "Risiko Berat Badan Lebih";

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

            $BBTB = "Berisiko Gizi Lebih";
            // echo "Berisiko Gizi Lebih";

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

            $IMTU = "Berisiko Gizi Lebih";
            // echo "Berisiko Gizi Lebih";

        }elseif ($zscoreIMTpU > 2 && $zscoreIMTpU <= 3) {

            // echo "Gizi Lebih";
            $IMTU = "Gizi Lebih";

            # code...
        }elseif ($zscoreBBpTB > 3) {

            $IMTU = "Obesitas";
            // echo "Obesitas";

            # code...
        }
        $get = DB::table('tbl_anak')
                ->join('tbl_desa', 'tbl_anak.id_desa', '=', 'tbl_desa.id_desa')
                ->select('tbl_anak.*', 'tbl_desa.nama_desa')
                ->where('id_anak', $id_anak)    
                ->get();
        foreach ($get as $key => $value) {
            if ($value->jenis_kelamin == "L") {
                $jenis_kelamin = "Laki - Laki";
            }else if ($value->jenis_kelamin == "P") {
                # code...
                $jenis_kelamin = "Perempuan";
            }
            $hasil = [
                'id_anak'       => $value->id_anak,
                'nama_anak'     => $value->nama_anak,
                'nama_ayah'     => $value->nama_ayah,
                'nama_ibu'      => $value->nama_ibu,
                'jenis_kelamin' => $jenis_kelamin,
                'tgl_lahir'     => date("d M Y", strtotime($value->tgl_lahir)),
                'desa'          => $value->nama_desa,
                'dusun'         => $value->dusun,
                'rw'            => $value->rw,
                'rt'            => $value->rt,
                'posyandu'      => $value->posyandu,
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
        }
        $data['hasil'] = $hasil;
        // print_r($hasil);
        return view('content/main/hasil_zscore', $data);
    }

    function ajax_get(Request $request){
        $id_anak = $request->id_anak;
        // $id_anak = "L20210822001";
        $get = DataAnak::join('tbl_desa', 'tbl_anak.id_desa', '=', 'tbl_desa.id_desa')
                ->select('tbl_anak.*', 'tbl_desa.nama_desa')
                ->where('id_anak', $id_anak)    
                ->get();
        // print_r($get);
        foreach ($get as $key => $value) {
            if ($value->jenis_kelamin == "L") {
                $jenis_kelamin = "Laki - Laki";
            }else if ($value->jenis_kelamin == "P") {
                # code...
                $jenis_kelamin = "Perempuan";
            }
            $awal       = date_create($value->tgl_lahir);
            $akhir      = date_create(); // waktu sekarang
            $diff       = date_diff( $awal, $akhir );
            $umur       = ($diff->y *12) + $diff->m;
            $data = [
                'nama_anak'     => $value->nama_anak,
                'nama_ayah'     => $value->nama_ayah,
                'nama_ibu'      => $value->nama_ibu,
                'jenis_kelamin' => $jenis_kelamin,
                'tgl_lahir'     => date("d M Y", strtotime($value->tgl_lahir)),
                'umur'          => $umur,
                'desa'          => $value->nama_desa,
                'dusun'         => $value->dusun,
                'rw'            => $value->rw,
                'rt'            => $value->rt,
                'posyandu'      => $value->posyandu
            ];
        }
        // print_r($data);
        echo json_encode($data);

    }

    function simpan_data(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $id_anak        = $request->id_anak;
        $id_user        = $request->session()->get('id_user');
        $tgl_lahir      = $request->tgl_lahir;
        $awal           = date_create($tgl_lahir);
        $akhir          = date_create(); // waktu sekarang
        $diff           = date_diff( $awal, $akhir );
        $umur           = ($diff->y *12) + $diff->m;
        $bb             = $request->bb;
        $tb             = $request->tb;
        $imt            = $request->imt;
        $bbpu           = $request->bbpu;
        $tbpu           = $request->tbpu;
        $bbptb          = $request->bbptb;
        $imtpu          = $request->imtpu;
        $z_bbpu         = $request->zscore_bbpu;
        $z_tbpu         = $request->zscore_tbpu;
        $z_bbptb        = $request->zscore_bbtb;
        $z_imtpu        = $request->zscore_imtu;
        $hasil = [
            'id_anak'       => $id_anak,
            'id_user'       => $id_user,
            'umur'          => $umur,
            'tanggal'       => date("Y-m-d"),
            'bb'            => $bb,
            'tb'            => $tb,
            'imt'           => $imt,
            'bbpu'          => $bbpu,
            'z_bbpu'        => $z_bbpu,
            'tbpu'          => $tbpu,
            'z_tbpu'        => $z_tbpu,
            'bbptb'         => $bbptb,
            'z_bbptb'       => $z_bbptb,
            'imtpu'         => $imtpu,
            'z_imtpu'       => $z_imtpu
        ];

        $insert = DB::table('hasil_zscore')->insert($hasil);
        if ($insert) {
            # code...
            return redirect()->action([KlasifikasiController::class, 'index']);
        }
    }
}