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
                                                        <h5>Status Gizi Anak</h5>
                                                        <span class="text-muted">Data PB/U atau TB/U Anak Laki-Laki dan Perempuan menurut Permenkes
                                                            No.2 Tahun 2020</span>
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
                                                                        <th>Umur (bulan)</th>
                                                                        <th>-3SD</th>
                                                                        <th>-2SD</th>
                                                                        <th>-1SD</th>
                                                                        <th>Median</th>
                                                                        <th>+1SD</th>
                                                                        <th>+2SD</th>
                                                                        <th>+3SD</th>
                                                                        <th>Jenis Kelamin</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                    $n=1;
                                                                    @endphp
                                                                    @foreach($dataset as $data)
                                                                    <tr>
                                                                        <td>{{$data->id_pbu}}</td>
                                                                        <td>{{$data->umur}}</td>
                                                                        <td>{{$data->m3SD}}</td>
                                                                        <td>{{$data->m2SD}}</td>
                                                                        <td>{{$data->m1SD}}</td>
                                                                        <td>{{$data->median}}</td>
                                                                        <td>{{$data->p1SD}}</td>
                                                                        <td>{{$data->p2SD}}</td>
                                                                        <td>{{$data->p3SD}}</td>
                                                                        <td>{{$data->jenis_kelamin}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Umur (bulan)</th>
                                                                        <th>-3SD</th>
                                                                        <th>-2SD</th>
                                                                        <th>-1SD</th>
                                                                        <th>Median</th>
                                                                        <th>+1SD</th>
                                                                        <th>+2SD</th>
                                                                        <th>+3SD</th>
                                                                        <th>Jenis Kelamin</th>
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