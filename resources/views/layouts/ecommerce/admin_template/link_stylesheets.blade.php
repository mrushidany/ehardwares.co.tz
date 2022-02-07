<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ config('app.name') }}</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ecommerce/img/icon.jpeg') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="{{ asset('ecommerce/assets/js/config.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('ecommerce/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ecommerce/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('ecommerce/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">

    <!-- ===============================================-->
    <!--    Icons-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

     <!-- ===============================================-->
    <!--    iziToast-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="{{ asset('ecommerce/iziToast/dist/css/iziToast.min.css') }}" />

    <!-- ===============================================-->
    <!--    DataTable-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />

