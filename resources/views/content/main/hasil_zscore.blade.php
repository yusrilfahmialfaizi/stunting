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
                                                        <form method="post" action="{{action('App\Http\Controllers\KlasifikasiController@simpan_data')}}" accept-charset="UTF-8">
                                                            {{ csrf_field() }}
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Anak</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="id_anak" id="id_anak"
                                                                        class="form-control" placeholder="Kode Anak"
                                                                        value="@php print_r($hasil['id_anak']); @endphp" hidden readonly>
                                                                    <input type="text" name="nama_anak" id="nama_anak"
                                                                        class="form-control" placeholder="Nama Anak"
                                                                        value="@php print_r($hasil['nama_anak']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="nama_ayah" id="nama_ayah"
                                                                        class="form-control"
                                                                        placeholder="Nama Ayah Kandung" value="@php print_r($hasil['nama_ayah']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="nama_ibu" id="nama_ibu"
                                                                        class="form-control"
                                                                        placeholder="Nama Ibu Kandung" value="@php print_r($hasil['nama_ibu']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis
                                                                    Kelamin</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="jenis_kelamin"
                                                                        id="jenis_kelamin" class="form-control"
                                                                        placeholder="Jenis Kelamin" value="{{$hasil['jenis_kelamin']}}" 
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tanggal
                                                                    Lahir</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="tgl_lahir" id="tgl_lahir"
                                                                        class="form-control" placeholder="Tanggal Lahir" value="@php print_r($hasil['tgl_lahir']); @endphp"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kelurahan /
                                                                    Desa</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="desa" id="desa"
                                                                        class="form-control"
                                                                        placeholder="Kelurahan / Desa" value="@php print_r($hasil['desa']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Dusun </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="dusun" id="dusun"
                                                                        class="form-control" placeholder="Dusun" value="@php print_r($hasil['dusun']); @endphp"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Rt </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="rt" id="rt"
                                                                        class="form-control" placeholder="Rt" value="@php print_r($hasil['rt']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Rw</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="rw" id="rw"
                                                                        class="form-control" placeholder="Rw" value="@php print_r($hasil['rw']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Posyandu</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="posyandu" id="posyandu"
                                                                        class="form-control" placeholder="posyandu" value="@php print_r($hasil['posyandu']); @endphp"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">BB</label>
                                                                <div class="col-sm-2">
                                                                    <input type="number" name="bb" id="bb"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['BB']); @endphp" readonly>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Kg</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">TB / PB</label>
                                                                <div class="col-sm-2">
                                                                    <input type="number" name="tb" id="tb"
                                                                    class="form-control" placeholder="TB dalam cm"
                                                                    value="@php print_r($hasil['TB']); @endphp" readonly>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">cm</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">IMT</label>
                                                                <div class="col-sm-2">
                                                                    <input type="number" name="imt" id="imt"
                                                                    class="form-control" placeholder="BB dalam KG"
                                                                    value="@php print_r($hasil['IMT']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">BB/U</label>
                                                                <div class="col-sm-2">
                                                                    <input type="number" name="zscore_bbpu" id="zscore_bbpu"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['ZScore_BBpU']); @endphp" readonly>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="bbpu" id="bbpu"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['BBU']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">TB/U atau PB/U</label>
                                                                <div class="col-sm-2">
                                                                    <input type="number" name="zscore_tbpu" id="zscore_tbpu"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['ZScore_TBpU']); @endphp" readonly>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="tbpu" id="tbpu"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['TBU']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">BB/PB atau BB/TB</label>
                                                                <div class="col-sm-2">
                                                                    <input type="number" name="zscore_bbtb" id="zscore_bbtb"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['ZScore_BBpTB']); @endphp" readonly>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="bbptb" id="bbptb"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['BBTB']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">IMT/U</label>
                                                                <div class="col-sm-2">
                                                                    <input type="number" name="zscore_imtu" id="zscore_imtu"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['ZScore_IMTpU']); @endphp" readonly>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="imtpu" id="imtpu"
                                                                        class="form-control" placeholder="BB dalam KG"
                                                                        value="@php print_r($hasil['IMTU']); @endphp" readonly>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <div class="col-sm-2">
                                                                    <button class="btn btn-primary" name="simpan"
                                                                    id="simpan">Simpan Data</button>
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
                    @endsection