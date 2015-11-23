<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alga | @yield('title')</title>

    <!-- TODO: Compile with Gulp. -->
    <!-- TODO: Minify & Generate SASS maps. -->
    <!-- TODO: Concatenate into one file. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    @yield('page-styles')
  </head>
  <body>
    @yield('content')
    <!-- TODO: Compile with Gulp. -->
    <!-- TODO: Minify & Uglify -->
    <!-- TODO: Concatenate into one file. -->
    @yield('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>