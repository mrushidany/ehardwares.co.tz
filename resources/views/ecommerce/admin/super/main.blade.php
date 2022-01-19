
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
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        @include('layouts.ecommerce.admin_template.navigation')

        @yield('content')
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    @include('layouts.ecommerce.admin_template.scripts_link');
  </body>
</html>
