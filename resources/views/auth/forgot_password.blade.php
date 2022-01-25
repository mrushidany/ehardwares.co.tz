<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ config('app.name') }} | Password Reset</title>

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
</head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <div class="row flex-center min-vh-100 py-6 text-center">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <a class="d-flex flex-center mb-4" href="{{ route('home') }}">
                        <img class="me-2" src="{{ asset('ecommerce/img/icon.jpeg') }}" alt="" width="58" />
                        <span class="font-sans-serif fw-bolder fs-5 d-inline-block">ehardwares</span>
                    </a>
                    <div class="card">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="mb-0">Forgot your password?</h5>
                            <small>Enter your email and we'll send you a reset link.</small>
                            <form class="mt-4" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <input class="form-control" name="email" type="email" placeholder="Email address" value="{{ old('email') }}" required autofocus />
                                <div class="mb-3"></div>
                                <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Send reset link</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('layouts.ecommerce.admin_template.scripts_link')
    @include('layouts.ecommerce.admin_template.scripts')
    @yield('scripts')
  </body>
</html>
