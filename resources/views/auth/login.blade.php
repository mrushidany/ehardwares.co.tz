
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ config('app.name') }} | Login</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ecommerce/img/icon.jpeg') }}">
    <link rel="manifest" href="{{ asset('ecommerce/assets/img/favicons/manifest.json') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('ecommerce/vendors/overlayscrollbars/OverlayScrollbars.min.css')}}" rel="stylesheet">
    <link href="{{ asset('ecommerce/assets/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{ asset('ecommerce/assets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">

</head>

<body>
   <!-- ===============================================-->
   <!--    Main Content-->
   <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <div class="row flex-center min-vh-100 py-6">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <a style="color:orangered" class="d-flex flex-center mb-4 text-orange-600" href="{{ route('landing_page') }}">
                        <img class="me-2" src="{{ asset('ecommerce/img/icon.jpeg') }}" alt="" width="58" />
                        <span class="font-sans-serif fw-bolder fs-5">ehardwares</span>
                    </a>
                    <div class="card">
                        <div class="card-body p-4 p-sm-5">
                            <div class="row flex-between-center mb-2">
                                <div class="col-auto offset-5">
                                    <h5>Log in</h5>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input id="password" class="form-control  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                                        <div class="input-group-addon">
                                            <i class="far fa-eye mx-2 mt-2" style="cursor: pointer;" onclick="toggle_password()"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember" checked="checked" />
                                                <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        @if (Route::has('password.request'))
                                            <a class="fs--1" href="{{ route('password.request') }}">Forgot Password?</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3" >
                                    <button class="btn btn-ehardware d-block w-100 mt-3" type="submit" name="submit">Log in</button>
                                </div>
                            </form>
                            <div class="position-relative mt-4">
                                <hr class="bg-300" />
                                <div class="divider-content-center">or log in with</div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-sm-12">
                                    <a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#">
                                        <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Google
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('ecommerce/assets/js/config.js')}}"></script>
    <script src="{{ asset('ecommerce/vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>
    <script src="{{ asset('ecommerce/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('ecommerce/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('ecommerce/polyfill/polyfill.min58be.js?features=window.scroll')}}"></script>
    <script src="{{ asset('ecommerce/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('ecommerce/assets/js/theme.js') }}"></script>
    <script>
        function toggle_password(){
            var password = document.getElementById('password')
            if(password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password"
            }
        }
    </script>
</body>

</html>
