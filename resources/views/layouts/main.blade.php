<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('partials.navbar')

    <div class="container mt-4">
      @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
