<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Naruto | @yield('title')</title>

        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Amatic+SC|Dosis|Fjalla+One|Gloria+Hallelujah|Indie+Flower|Josefin+Sans|Jua|Lobster|Pacifico|Quicksand|Shadows+Into+Light" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">        
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">        
        @yield('style')
    </head>
    <body>
        <!--header-->
        @include('template.header')
        <!--end of Header-->

        <div class="container">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-3.2.1.slim.min.js') }}"></script>        
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        <!--Main JS-->
        <script src="{{ asset('/js/app.js') }}"></script>
        
        @yield('script')
        

    </body>
</html>