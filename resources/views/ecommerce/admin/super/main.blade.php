<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    @include('layouts.ecommerce.admin_template.link_stylesheets')
</head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        @include('layouts.ecommerce.admin_template.navigation')

        <div class="content">
            @include('layouts.ecommerce.admin_template.top_navigation')

            @yield('content')

            @include('layouts.ecommerce.admin_template.footer')
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
