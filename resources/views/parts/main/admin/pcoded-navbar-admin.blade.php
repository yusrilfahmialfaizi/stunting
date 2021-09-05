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
                                        @if (Session::get('status') == "login" && Session::get('jabatan') == "admin")
                                        <a href="/dashboard-admin">
                                            
                                            @elseif (Session::get('status') != "login" && Session::get('jabatan') != "admin")
                                            <a href="/">
                                            
                                        @endif
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @if (Request::segment(1) == "data_user")
                            <li class="pcoded-hasmenu {{ Request::is('data_user') ? 'active' : 'active' }}">
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
                                        <a href="/data-user" data-i18n="nav.form-components.main">
                                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                            <span class="pcoded-mtext">Data User</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                    <span class="pcoded-mtext">{{ request()->session()->get('nama') }}</span>
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