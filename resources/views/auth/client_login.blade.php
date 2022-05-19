
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
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5 text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                        <div class="bg-holder bg-auth-card-shape" style="background-image:url({{ asset('ecommerce/assets/img/illustrations/half-circle.png') }}">
                                    </div>
                                    <!--/.bg-holder-->
                                    <div class="z-index-1 position-relative">
                                        <a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="{{ route('landing_page') }}">ehardwares</a>
                                        <p class="opacity-75 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in!</p>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                    <p class="text-white">Don't have an account?<br>
                                        <a class="text-decoration-underline link-light" href="{{ route('register') }}">Get started!</a>
                                    </p>
                                    <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a class="text-decoration-underline text-white" href="#!">terms</a> and <a class="text-decoration-underline text-white" href="#!">conditions </a></p>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <h3>Login</h3>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="card-email">Email address</label>
                                            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="card-password">Password</label>
                                            </div>
                                            <input id="password" class="form-control  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" id="card-checkbox" checked="checked" id="remember_me" name="remember"  />
                                                    <label class="form-check-label mb-0" for="card-checkbox">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                @if (Route::has('password.request'))
                                                    <a class="fs--1" href="{{ route('password.request') }}">Forgot Password?</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3">
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
