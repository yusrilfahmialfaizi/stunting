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
                                        <a href="/dashboard">
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
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
                                        <a href="/peta-sebaran">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext">Peta Sebaran</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-info"></i></span>
                                    <span class="pcoded-mtext">Info</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="javascript:void(0)" data-i18n="nav.bootstrap-table.main">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext">Contact</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-map-pin"></i></span>
                                    <span class="pcoded-mtext">About</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="javascript:void(0)" data-i18n="nav.bootstrap-table.main">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext">About</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-log-in"></i></span>
                                    <span class="pcoded-mtext">Login</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="/login" data-i18n="nav.bootstrap-table.main">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext">Login</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>