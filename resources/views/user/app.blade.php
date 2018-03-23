<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user/layouts/head')

  </head>

  <body>

    @include('user/layouts/header')

      @section('main-content')
        @show

    @include('user/layouts/footer')

<!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/clean-blog.min.js')}}"></script>

  </body>

</html>
