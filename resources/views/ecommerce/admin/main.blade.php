<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    @include('layouts.admin.link_stylesheets')
</head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        @include('layouts.admin.navigation')

        <div class="content">
            @include('layouts.admin.top_navigation')

            @yield('content')

            @include('layouts.admin.footer')
        </div>

      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('layouts.admin.scripts_link')
    @include('layouts.admin.scripts')
    @yield('scripts')
  </body>
</html>
