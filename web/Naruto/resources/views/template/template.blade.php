<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Naruto | @yield('title')</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        @yield('style')
    </head>
    <body>
        <!--header-->
        @include('template.header')
        <!--end of Header-->
        
        @include('template.slider')

        <div class="container">
            @yield('content')

        </div>
       
        
        <script src="{{ asset('/js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        @yield('script')
        
    </body>
</html>