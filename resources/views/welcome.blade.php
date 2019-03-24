<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <link rel="prefetch" as="font" href="css/fonts.css" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="wrapper">
        @include('layouts/header')
        @include('layouts/top-section')
        </div>
        <script src="js/app.js"></script>
    </body>
</html>