<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> <!--Font-->
        <title>Konoha Village</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"> <!--Css-->
        <script src="{{ asset('js/app.js') }}"></script> <!--JS-->
    </head>
    
    <body>
        @yield('content')
        <a>  </a>
    </body>
</html>
