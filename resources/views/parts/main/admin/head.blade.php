<head>
    <title>GiStunting - Geographic Information of Stunting</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets\assets\images\logo-poltek.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\icon\feather\css\feather.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\icon\themify-icons\themify-icons.css')}}">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\pages\prism\prism.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\assets\pages\data-table\css\buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/sweetalert/css/sweetalert.css')}}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/assets/css/component.css')}}">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('assets\bower_components/select2/css/select2.min.css')}}" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets\bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components/multiselect/css/multi-select.css')}}" />
    <!-- hover-effect.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets/pages/hover-effect/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets/pages/hover-effect/set2.css')}}">
    <!-- owl carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components/owl.carousel/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components/owl.carousel/css/owl.theme.default.css')}}">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components/swiper/css/swiper.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\css\jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\assets\css\pcoded-horizontal.min.css')}}">
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
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-database.js"></script>
    
    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-analytics.js"></script>
    
</head>