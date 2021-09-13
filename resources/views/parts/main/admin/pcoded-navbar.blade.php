                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item">
                            @if(Request::segment(1) == "dashboard")
                            <li class="pcoded-hasmenu {{ Request::is('dashboard') ? 'active' : 'active' }}">
                                @else
                            <li class="pcoded-hasmenu">
                                @endif
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Home</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        @if (Session::get('status') == "login" && Session::get('jabatan') == "petugas")
                                        <a href="/dashboard">
                                            
                                            @elseif (Session::get('status') != "login" && Session::get('jabatan') != "petugas")
                                            <a href="/">
                                            
                                        @endif
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @if (Request::segment(1) == "peta-sebaran")
                            <li class="pcoded-hasmenu {{ Request::is('peta-sebaran') ? 'active' : 'active' }}">
                                @else
                            <li class="pcoded-hasmenu">    
                            @endif
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                                    <span class="pcoded-mtext">Peta</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="/peta-sebaran-stunting">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext">Peta Sebaran</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @if (Request::segment(1) == "zscore")
                            <li class="pcoded-hasmenu {{ Request::is('zscore') ? 'active' : 'active' }}">
                                @else
                            <li class="pcoded-hasmenu">    
                            @endif
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                    <span class="pcoded-mtext">Klasifikasi</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="/zscore" data-i18n="nav.form-pickers.main">
                                            <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                            <span class="pcoded-mtext">Zscore</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @if (Request::segment(1) == "data_bbu")
                            <li class="pcoded-hasmenu {{ Request::is('data_bbu') ? 'active' : 'active' }}">
                                @elseif (Request::segment(1) == "data_tbu")
                            <li class="pcoded-hasmenu {{ Request::is('data_tbu') ? 'active' : 'active' }}">
                                @elseif (Request::segment(1) == "data_bbtb")
                            <li class="pcoded-hasmenu {{ Request::is('data_bbtb') ? 'active' : 'active' }}">
                                @elseif (Request::segment(1) == "data_imtu")
                            <li class="pcoded-hasmenu {{ Request::is('data_imtu') ? 'active' : 'active' }}">
                                @elseif (Request::segment(1) == "data_anak")
                            <li class="pcoded-hasmenu {{ Request::is('data_anak') ? 'active' : 'active' }}">
                                @else
                            <li class="pcoded-hasmenu">    
                            @endif
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                                    <span class="pcoded-mtext">Data</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="/data-anak" data-i18n="nav.form-components.main">
                                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                            <span class="pcoded-mtext">Data Anak</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/data-desa" data-i18n="nav.form-components.main">
                                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                            <span class="pcoded-mtext">Data Desa</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/data-riwayat" data-i18n="nav.form-pickers.main">
                                            <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                            <span class="pcoded-mtext">Data Zscore</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                    <span class="pcoded-mtext">Halo, {{ request()->session()->get('nama') }} !!!</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="/logout" data-i18n="nav.bootstrap-table.main">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext">Logout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>