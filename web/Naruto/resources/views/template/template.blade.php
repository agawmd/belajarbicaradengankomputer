 <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Personal Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        
        <!-- Javascript -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('personal.beranda.home')          }}" class="active">Home</a>&nbsp;
                    <a href="{{ route('personal.tentang.about-info')    }}">About</a>&nbsp;
                    <a href="{{ route('personal.keahlian.skill-info')   }}">Skills</a>&nbsp;
                    <a href="{{ route('personal.project.portfolio-info')}}">Portfolio</a>&nbsp;
                    <a href="{{ route('personal.kontak.contact-info')   }}">Contact</a>&nbsp;
                </div>
            </div>
        </div>        
        
        @yield('content')
    </body>
</html>
