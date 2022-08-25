<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AREI - {{ $title }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/plugins/skeleton/jquery.skeleton.css') }}" />
  <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
  @include('partials.navbar')
  <div class="container">
    @yield('content')
  </div>
  <script src="{{
                  asset('assets/plugins/jquery/jquery.min.js')
              }}"></script>
  <script src="{{
                  asset('assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js')
              }}"></script>
  <script src="{{
                  asset('assets/plugins/skeleton/jquery.scheletrone.js')
              }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  @yield('script')
</body>

</html>