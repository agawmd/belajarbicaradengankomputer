<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title')</title>

        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        @yield('style')
    </head>
    <body>
        <!-- Header -->
        @include('template.header')
        <!-- End of Header -->
        
        <div class="container">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-3.3.1.slim.min.js') }}"></script>
        @yield('script')
        
    </body>
</html>
