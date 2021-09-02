<head>
    <meta charset="utf-8">
    <title>GiStunting - Geographic Information of Stunting</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page template for creative dashboard">
    <meta name="keywords" content="Landing page template">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets\assets\images\logo-poltek.ico')}}" type="image/png" sizes="16x16">
    <!-- Bootstrap -->
    <link href="{{asset('assets\extra-pages\landingpage\assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets\extra-pages\landingpage\assets\css\animate.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets\extra-pages\landingpage\assets\css\owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets\extra-pages\landingpage\assets\css\owl.theme.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets\extra-pages\landingpage\assets\css\magnific-popup.css')}}">
    <!-- Full Page Animation -->
    <link rel="stylesheet" href="{{asset('assets\extra-pages\landingpage\assets\css\animsition.min.css')}}">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href="{{asset('assets\extra-pages\landingpage\assets\css\ionicons.min.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@3.0.2/dist/esri-leaflet.js"
        integrity="sha512-myckXhaJsP7Q7MZva03Tfme/MSF5a6HC2xryjAM4FxPLHGqlh5VALCbywHnzs2uPoF/4G/QVXyYDDSkp5nPfig=="
        crossorigin=""></script>

    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css"
        integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
        crossorigin="">
    <script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"
        integrity="sha512-vZbMwAf1/rpBExyV27ey3zAEwxelsO4Nf+mfT7s6VTJPUbYmD2KSuTRXTxOFhIYqhajaBU+X5PuFK1QJ1U9Myg=="
        crossorigin=""></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Main Style css -->
    <link href="{{asset('assets\extra-pages\landingpage\assets\css\style.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
    <style>
        /*the container must be positioned relative:*/
        .custom-select {
        position: relative;
        font-family: Arial;
        }

        .custom-select select {
        display: none; /*hide original SELECT element:*/
        }

        .select-selected {
        background-color: DodgerBlue;
        }

        /*style the arrow inside the select element:*/
        .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
        }

        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
        }

        /*style the items (options), including the selected item:*/
        .select-items div,.select-selected {
        color: #ffffff;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
        cursor: pointer;
        user-select: none;
        }

        /*style items (options):*/
        .select-items {
        position: absolute;
        background-color: DodgerBlue;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
        }

        /*hide the items when the select box is closed:*/
        .select-hide {
        display: none;
        }

        .select-items div:hover, .same-as-selected {
        background-color: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>