                    @extends('parts.main.master')
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
                                                        <span class="text-muted">Data Anak Laki-Laki dan Perempuan Kecamatan Kalisat</span>
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
                                                                        <th>No.</th>
                                                                        <th>Nama Anak</th>
                                                                        <th>Nama Ayah</th>
                                                                        <th>Nama Ibu</th></th>
                                                                        <th>Jenis Kelamin</th>
                                                                        <th>Tanggal Lahir</th>
                                                                        <th>Kelurahan / Desa</th>
                                                                        <th>Dusun</th>
                                                                        <th>Rt.</th>
                                                                        <th>Rw.</th>
                                                                        <th>Posyandu</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                    $n=1;
                                                                    @endphp
                                                                    @foreach($dataset as $data)
                                                                    <tr>
                                                                        <td>{{$data->id}}</td>
                                                                        <td>{{$data->nama_anak}}</td>
                                                                        <td>{{$data->nama_ayah}}</td>
                                                                        <td>{{$data->nama_ibu}}</td>
                                                                        <td>{{$data->jenis_kelamin}}</td>
                                                                        <td>{{$data->tgl_lahir}}</td>
                                                                        <td>{{$data->desa}}</td>
                                                                        <td>{{$data->dusun}}</td>
                                                                        <td>{{$data->rt}}</td>
                                                                        <td>{{$data->rw}}</td>
                                                                        <td>{{$data->posyandu}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Nama Anak</th>
                                                                        <th>Nama Ayah</th>
                                                                        <th>Nama Ibu</th></th>
                                                                        <th>Jenis Kelamin</th>
                                                                        <th>Tanggal Lahir</th>
                                                                        <th>Kelurahan / Desa</th>
                                                                        <th>Dusun</th>
                                                                        <th>Rt.</th>
                                                                        <th>Rw.</th>
                                                                        <th>Posyandu</th>
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