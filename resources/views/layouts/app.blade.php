<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="prefetch" as="font" href="css/fonts.css" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="wrapper">
            @yield('content')
            
        </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQVUQKyG3f6xsvj1HeRoxckTm1iNYVdGQ"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>