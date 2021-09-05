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
                                                        <span class="text-muted">menggunakan Zscore menurut Permenkes
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
                                                        <form method="post"
                                                        action="{{ action('App\Http\Controllers\KlasifikasiController@zscore') }}"
                                                        accept-charset="UTF-8">
                                                        {{ csrf_field() }}
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Kode Anak</label>
                                                                <div class="col-sm-4">
                                                                    <select name="id_anak" id="id_anak"
                                                                    class="js-example-placeholder-multiple col-sm-12" placeholder="Kelurahan / Desa" required>
                                                                    <option value="&nbsp">--Pilih--</option>
                                                                    @foreach ($anak as $item)
                                                                    <option value="{{$item->id_anak}}">{{$item->id_anak}} | {{$item->nama_anak}}</option>
                                                                        
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nama Anak</label>
                                                            <div class="col-sm-4">
                                                                    <input type="text" name="nama_anak" id="nama_anak"
                                                                    class="form-control" placeholder="Nama Anak"
                                                                        readonly>
                                                                    </div>
                                                                </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="nama_ayah"
                                                                        id="nama_ayah" class="form-control"
                                                                        placeholder="Nama Ayah Kandung" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="nama_ibu"
                                                                        id="nama_ibu" class="form-control"
                                                                        placeholder="Nama Ibu Kandung" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis
                                                                    Kelamin</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" name="jenis_kelamin"
                                                                    id="jenis_kelamin" class="form-control"
                                                                    placeholder="Jenis Kelamin" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="tgl_lahir"
                                                                    id="tgl_lahir" class="form-control"
                                                                    placeholder="Tanggal Lahir" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Umur (bulan)</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="umur"
                                                                    id="umur" class="form-control"
                                                                    placeholder="Tanggal Lahir" readonly>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kelurahan / Desa</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" name="desa"
                                                                    id="desa" class="form-control"
                                                                    placeholder="Kelurahan / Desa" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Dusun </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="dusun"
                                                                        id="dusun" class="form-control"
                                                                        placeholder="Dusun" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Rt </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="rt"
                                                                        id="rt" class="form-control"
                                                                        placeholder="Rt" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Rw</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="rw"
                                                                        id="rw" class="form-control"
                                                                        placeholder="Rw" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Posyandu</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="posyandu"
                                                                        id="posyandu" class="form-control"
                                                                        placeholder="posyandu" readonly>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">BB</label>
                                                                <div class="col-sm-4">
                                                                    <input type="number" name="bb"
                                                                        id="bb" class="form-control"
                                                                        placeholder="BB dalam Kg" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Cara Ukur TB</label>
                                                                <div class="col-sm-4">
                                                                    <select name="ukur" id="ukur"
                                                                    class="form-control" required>
                                                                        <option value="&nbsp">-- Pilih --</option>
                                                                        <option value="berdiri">Berdiri</option>
                                                                        <option value="telentang">Telentang</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">TB / PB</label>
                                                                <div class="col-sm-4">
                                                                    <input type="number" name="tb"
                                                                        id="tb" step="any" class="form-control"
                                                                        placeholder="TB / PB dalam cm" required>
                                                                </div>
                                                            </div>
                                                            
                                                            <hr>
                                                            <div class="form-group">
                                                                <div class="col-sm-2">
                                                                    <button class="btn btn-primary" name="analys"
                                                                    id="analys">Analysis</button>
                                                                </div>
                                                            </div>
                                                        </form>
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
                    <script type = "text/javascript" >
                        $(document).ready(function () {
                            $("#id_anak").on('change', function () {
                                var id_anak = $("#id_anak").val();
                                $.ajax({
                                    url: "{{URL::to('get_anak')}}",
                                    type: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                            .attr('content')
                                    },
                                    // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                                    dataType: 'json',
                                    data: {
                                        id_anak: id_anak
                                    },
                                    cache: false,
                                    success: function (data) {
                                        document.getElementById("nama_anak").value = data.nama_anak;
                                        document.getElementById("nama_ayah").value = data.nama_ayah;
                                        document.getElementById("nama_ibu").value = data.nama_ibu;
                                        document.getElementById("jenis_kelamin").value = data.jenis_kelamin;
                                        document.getElementById("tgl_lahir").value = data.tgl_lahir;
                                        document.getElementById("umur").value = data.umur;
                                        document.getElementById("desa").value = data.desa;
                                        document.getElementById("dusun").value = data.dusun;
                                        document.getElementById("rt").value = data.rt;
                                        document.getElementById("rw").value = data.rw;
                                        document.getElementById("posyandu").value = data.posyandu;
                                    }
                                });
                            })
                        })
                    </script>
                    @endsection