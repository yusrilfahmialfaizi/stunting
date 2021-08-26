            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>

                        @if (Session::get('status') == "login" && Session::get('jabatan') == "petugas")
                            <a href="/dashboard">
                                
                        @elseif (Session::get('status') != "login" && Session::get('jabatan') != "petugas")
                            <a href="/">
                                
                        @endif
                            <img class="img-fluid" src="{{asset('assets\assets\images\navbar-brand.png')}}" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>