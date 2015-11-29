<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Alga | @yield('title')</title>

    <link rel="stylesheet" href="/styles/app.min.css">
    @yield('page-styles')
  </head>
  <body>
    @yield('content')
    <script src="/js/app.min.js"></script>
  </body>
</html>