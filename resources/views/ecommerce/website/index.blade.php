<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts.web.link_stylesheets')
</head>

<body>
    <!-- Header Area start  -->
    @include('layouts.web.header')
    <!-- Header Area End  -->

    <!-- Off Canvas section  -->
    @include('layouts.web.off_canvas')

    @yield('content')

    <!-- Footer Area Start -->
    @include('layouts.web.footer')
    <!-- Footer Area End -->



    <!-- Modal -->
    @include('layouts.web.modal')
    <!-- Modal end -->

    @include('layouts.web.scripts_link')

</html>
