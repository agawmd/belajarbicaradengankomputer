<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Designer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

        <title>Konoha Website</title>
        
        
        <!-- Style -->
        <link href="{{ asset('css/myStyle.css') }}" type="text/css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Javascript -->
        <script src="{{ asset('js/myJavas.js') }}"></script>
        <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
        <script src="{{ asset('js/jquery.tools.min.js') }}"></script>

    </head>

    <body style="background-image: url('/img/galaxy.jpg'); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="topnav" id="myTopnav">
                        <a href="{{ route('konoha.uzumaki.home')    }}">Home</a>&nbsp;
                        <a href="{{ route('konoha.uzumaki.village') }}">Village</a>&nbsp;
                        <a href="{{ route('konoha.uzumaki.team')    }}">Team</a>&nbsp;
                        <a href="{{ route('konoha.uzumaki.clan')    }}">Clan</a>&nbsp;
                        <a href="{{ route('konoha.uzumaki.jutsu')   }}">Jutsu</a>&nbsp;
                        <a href="javascript:void(0)" style="font-size: 15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        
        <!-- script for current page -->
        @yield('script')
    </body>
</html>
