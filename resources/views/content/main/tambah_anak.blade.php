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
                                                        <h5>Tambah Data Anak</h5>
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
                                                            action="{{ action('App\Http\Controllers\DataAnakController@simpan') }}"
                                                            accept-charset="UTF-8">
                                                            {{ csrf_field() }}
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Anak</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="nama_anak" id="nama_anak"
                                                                        class="form-control" placeholder="Nama Anak"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="nama_ayah"
                                                                        id="nama_ayah" class="form-control"
                                                                        placeholder="Nama Ayah Kandung" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="nama_ibu"
                                                                        id="nama_ibu" class="form-control"
                                                                        placeholder="Nama Ibu Kandung" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis
                                                                    Kelamin</label>
                                                                    <div class="col-sm-4">
                                                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                                                        class="form-control" required>
                                                                        <option value="&nbsp">--Pilih--</option>
                                                                        <option value="L">Laki - Laki</option>
                                                                        <option value="P">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                                <div class="col-sm-4">
                                                                    <input type="date" name="tgl_lahir"
                                                                    id="tgl_lahir" class="form-control"
                                                                    placeholder="Tanggal Lahir" required>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kelurahan / Desa</label>
                                                                    <div class="col-sm-4">
                                                                        <select name="desa" id="desa"
                                                                        class="js-example-placeholder-multiple col-sm-12"
                                                                        multiple="multiple" placeholder="Kelurahan / Desa" required>
                                                                        <option value="Ajung">Ajung</option>
                                                                        <option value="Gambiran">Gambiran</option>
                                                                        <option value="Glagahwero">Glagahwero</option>
                                                                        <option value="Gumuksari">Gumuksari</option>
                                                                        <option value="Kalisat">Kalisat</option>
                                                                        <option value="Patempuran">Patempuran</option>
                                                                        <option value="Plalangan">Plalangan</option>
                                                                        <option value="Sebanen">Sebanen</option>
                                                                        <option value="Sukoreno">Sukoreno</option>
                                                                        <option value="Sumber Jeruk">Sumber Jeruk</option>
                                                                        <option value="Sumber Kalong">Sumber Kalong</option>
                                                                        <option value="Sumber Ketempa">Sumber Ketempa</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Dusun </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="dusun"
                                                                        id="dusun" class="form-control"
                                                                        placeholder="Dusun" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Rt </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="rt"
                                                                        id="rt" class="form-control"
                                                                        placeholder="Rt" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Rw</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="rw"
                                                                        id="rw" class="form-control"
                                                                        placeholder="Rw" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Posyandu</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" name="posyandu"
                                                                        id="posyandu" class="form-control"
                                                                        placeholder="posyandu" required>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <div class="col-sm-2">
                                                                    <button class="btn btn-primary" name="simpan"
                                                                    id="simpan">Simpan</button>
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