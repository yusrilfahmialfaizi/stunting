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
                                                        <h5>Data Desa</h5>
                                                        <span class="text-muted">Data Desa Laki-Laki dan Perempuan Kecamatan Umbulsari</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <a href="{{url('data-desa/create')}}" class="btn btn-primary"> + Tambah Data Desa</a>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Kelurahan / Desa</th>
                                                                        <th>Longitude</th>
                                                                        <th>Latitude</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                    $n=1;
                                                                    @endphp
                                                                    @foreach($dataset as $data)
                                                                    <tr>
                                                                        <td>{{$n++}}</td>
                                                                        <td>{{$data->nama_desa}}</td>
                                                                        <td>{{$data->longtd}}</td>
                                                                        <td>{{$data->latd}}</td>
                                                                        <td>
                                                                            <div class="btn-group " role="group">
                                                                                <a href="{{url('data-desa/'.$data->id_desa.'/edit')}}" type="button" class="btn btn-warning btn-sm waves-effect waves-light" data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="Update"><i class="feather icon-edit-2"></i></a>
                                                                                <a href="javascript:void(0)" class="btn btn-danger btn-sm waves-effect waves-light button" id="delete" data-toggle="tooltip"
                                                                                data-placement="top" title=""
                                                                                data-original-title="delete" data-url="{{url('data-desa/'.$data->id_desa)}}" data-id="{{$data->id_desa}}"><i class="feather icon-trash"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Kelurahan / Desa</th>
                                                                        <th>Longitude</th>
                                                                        <th>Latitude</th>
                                                                        <th>Action</th>
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
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(".button").on('click', function() {
                                var id = $(this).data('id');
                                var url = $(this).data('url');
                                swal({
                                        title: "Are you sure?",
                                        text: "Your will not be able to recover this imaginary file!",
                                        type: "warning",
                                        showCancelButton: true,
                                        confirmButtonClass: "btn-danger",
                                        confirmButtonText: "Yes, delete it!",
                                        closeOnConfirm: false
                                    },
                                    function () {
                                        $.ajax({
                                            type: "DELETE",
                                            url: url,
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                                    .attr('content')
                                            },
                                            success: function (response) {
                                                if (response.message == 'sukses') {
                                                    swal({
                                                        title: "Deleted!",
                                                        text: "File anda telah dihapus.",
                                                        type: "success",
                                                        confirmButtonClass: "btn-primary",
                                                        confirmButtonText: "Ok",
                                                        closeOnConfirm: false
                                                    },
                                                    function () {location.reload()});
                                                    // swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                                }
                                                // location.reload();
                                                //         //
                                            }         
                                        })
                                });
                            })
                        })
                    </script>
                    @endsection