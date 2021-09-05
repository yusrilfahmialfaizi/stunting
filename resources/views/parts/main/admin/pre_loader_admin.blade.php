<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="preloader3 loader-block">
                    <div class="circ1"></div>
                    <div class="circ2"></div>
                    <div class="circ3"></div>
                    <div class="circ4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    {{-- <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('parts.main.navbar')
            @include('parts.main.sidebar')

            @include('parts.main.container')
        </div>
    </div> --}}
    <div id="pcoded" class="pcoded">

        <div class="pcoded-container">
            <!-- Menu header start -->
            @include('parts.main.admin.navbar')
            <!-- Menu header end -->
            <div class="pcoded-main-container">
                @include('parts.main.admin.pcoded-navbar-admin')
                <!-- Sidebar chat start -->
                @include('parts.main.admin.sidebar')
                <!-- Sidebar inner chat end-->
                <div class="pcoded-wrapper">
                    
                