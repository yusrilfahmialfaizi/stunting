                    @extends('parts.main.admin.master')
                    @section('content')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body m-t-50">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->

                                            <!-- task, page, download counter  end -->
                                            <div class="col-xl-1"></div>
                                            <!--  sale analytics start -->
                                            <div class="col-xl-10 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Data Anak</h5>
                                                        <span class="text-muted">Data Zscore Anak Laki-Laki dan Perempuan Kecamatan Kalisat</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <hr>
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th rowspan="2" style="text-align: center;">No.</th>
                                                                        <th rowspan="2" style="text-align: center;">Nama Petugas</th>
                                                                        <th rowspan="2" style="text-align: center;">Tanggal</th>
                                                                        <th rowspan="2" style="text-align: center;">Nama Anak</th>
                                                                        <th rowspan="2" style="text-align: center;">Jenis Kelamin</th>
                                                                        <th rowspan="2" style="text-align: center;">Umur (bln)</th>
                                                                        <th rowspan="2" style="text-align: center;">Kelurahan / Desa</th>
                                                                        <th rowspan="2" style="text-align: center;">BB</th>
                                                                        <th rowspan="2" style="text-align: center;">TB</th>
                                                                        <th rowspan="2" style="text-align: center;">IMT</th>
                                                                        <th colspan="4" style="text-align: center;">Nilai Zscore</th>
                                                                        <th colspan="4" style="text-align: center;">Status Gizi</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="text-align: center;">BB/U</th>
                                                                        <th style="text-align: center;">TB/U</th>
                                                                        <th style="text-align: center;">BB/TB</th>
                                                                        <th style="text-align: center;">IMT/U</th>
                                                                        <th style="text-align: center;">BB/U</th>
                                                                        <th style="text-align: center;">TB/U</th>
                                                                        <th style="text-align: center;">BB/TB</th>
                                                                        <th style="text-align: center;">IMT/U</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                    $n=1;
                                                                    @endphp
                                                                    @foreach($zscore as $data)
                                                                    <tr>
                                                                        <td>{{$data->id_anak}}</td>
                                                                        <td>{{$data->nama_petugas}}</td>
                                                                        <td>{{date("d M Y", strtotime($data->tanggal))}}</td>
                                                                        <td>{{$data->nama_anak}}</td>
                                                                        <td>{{$data->jenis_kelamin}}</td>
                                                                        <td>{{$data->umur}}</td>
                                                                        <td>{{$data->nama_desa}}</td>
                                                                        <td>{{$data->bb}}</td>
                                                                        <td>{{$data->tb}}</td>
                                                                        <td>{{$data->imt}}</td>
                                                                        <td>{{$data->z_bbpu}}</td>
                                                                        <td>{{$data->z_tbpu}}</td>
                                                                        <td>{{$data->z_bbptb}}</td>
                                                                        <td>{{$data->z_imtpu}}</td>
                                                                        <td>{{$data->bbpu}}</td>
                                                                        <td>{{$data->tbpu}}</td>
                                                                        <td>{{$data->bbptb}}</td>
                                                                        <td>{{$data->imtpu}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th rowspan="2" style="text-align: center;">No.</th>
                                                                        <th rowspan="2" style="text-align: center;">Nama Petugas</th>
                                                                        <th rowspan="2" style="text-align: center;">Tanggal</th>
                                                                        <th rowspan="2" style="text-align: center;">Nama Anak</th>
                                                                        <th rowspan="2" style="text-align: center;">Jenis Kelamin</th>
                                                                        <th rowspan="2" style="text-align: center;">Umur (bln)</th>
                                                                        <th rowspan="2" style="text-align: center;">Kelurahan / Desa</th>
                                                                        <th rowspan="2" style="text-align: center;">BB</th>
                                                                        <th rowspan="2" style="text-align: center;">TB</th>
                                                                        <th rowspan="2" style="text-align: center;">IMT</th>
                                                                        <th colspan="4" style="text-align: center;">Nilai Zscore</th>
                                                                        <th colspan="4" style="text-align: center;">Status Gizi</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="text-align: center;">BB/U</th>
                                                                        <th style="text-align: center;">TB/U</th>
                                                                        <th style="text-align: center;">BB/TB</th>
                                                                        <th style="text-align: center;">IMT/U</th>
                                                                        <th style="text-align: center;">BB/U</th>
                                                                        <th style="text-align: center;">TB/U</th>
                                                                        <th style="text-align: center;">BB/TB</th>
                                                                        <th style="text-align: center;">IMT/U</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-1"></div>
                                            <!--  sale analytics end -->
                                        </div>
                                    </div>
                                </div>

                                {{-- <div id="styleSelector">
                                    
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endsection