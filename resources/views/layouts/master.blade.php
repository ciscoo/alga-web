<!doctype html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The web interface for the Alga-App.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alga-Web | @yield('title')</title>

    <!-- TODO: Source locally instead of CDN -->
    <!-- TODO: Concatenate Bootstrap and custom styles into one CSS. -->
    <!-- TODO: Set up Gulp build environment. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    @yield('page-styles')
</head>
<body>
@yield('content')

        <!-- TODO: Same as above with the CSS. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
</body>
</html>