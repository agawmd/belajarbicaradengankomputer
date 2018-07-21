<!--[if lt IE 8]>
           <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
       <![endif]-->
<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<!-- Sections -->
<section id="social" class="social">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="social-wrapper">
                <div class="col-md-6">
                    <div class="social-icon">
                        <a href="https://web.facebook.com/stmikkharismamks/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/u/0/111034164759581360730" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-contact">
                        <a href="#"><i class="fa fa-phone"></i>+411 871-555</a>
                        <a href="#"><i class="fa fa-envelope"></i>stmik@kharisma.ac.id</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->       
</section>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::route()->getName() != '' ?: 'active'}}">
                    <a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Beranda</a>
                </li>
                <li class="{{ Request::route()->getName() != 'home.buku' ?: 'active'}}">
                    <a href="{{ route('home.buku') }}"><i class="fa fa-book"></i> KOLEKSI BUKU</a>
                </li>
                <li class="{{ Request::route()->getName() != 'home.aplikasi' ?: 'active'}}">
                    <a href="{{ route('home.aplikasi') }}"><i class="fa fa-desktop"></i> TUGAS APLIKASI</a>
                </li>
                <li class="{{ Request::route()->getName() != 'home.ilmiah' ?: 'active'}}">
                    <a href="{{ route('home.ilmiah') }}"><i class="fa fa-flask"></i> KARYA ILMIAH</a>
                </li>
                <li class="{{ Request::route()->getName() != 'home.jurnal' ?: 'active'}}">
                    <a href="{{ route('home.jurnal') }}"><i class="fa fa-list"></i> JOURNAL & PROCIDING</a>
                </li>
                @guest
                <li><a href="{{ route('login') }}"><i class="fa fa-book"></i> Masuk</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>