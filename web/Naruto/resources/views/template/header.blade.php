<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="{{ route('home.beranda') }}">
        <span class="d-block d-lg-none">Waode Makani Daga</span>
        <span class="d-none d-lg-block">
            <img class="img-fluid img-profile" src="{{ asset('/img/me.png') }}" alt="{{ asset('/img/me.png') }}">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger active" href="{{ route('home.beranda') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('home.profile') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('home.resume') }}">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('home.skill') }}">Skill</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('home.contact') }}">Contact</a>
            </li>
        </ul>
    </div>
    
    <div class="icon-bar">
        <a href="https://www.linkedin.com/in/agawmd/" target="_blank"><img title="Linked In" class="icon" src="{{ asset('/icon/linkedin.png') }}" alt="{{ asset('/icon/linkedin.png') }}"></a>
        <a href="https://www.instagram.com/aga_wmd/" target="_blank"><img title="Instagram" class="icon" src="{{ asset('/icon/instagram.png') }}" alt="{{ asset('/icon/instagram.png') }}"></a>        
        <a href="https://secure.skype.com/portal/overview" target="_blank"><img title="Skype" class="icon" src="{{ asset('/icon/skype.png') }}" alt="{{ asset('/icon/skype.png') }}"></a>        
    </div>
    
    <div class="text-bottom">
        <div class="copy">&copy; AGA.BASRIYASIN.COM</div>
        <div class="all">ALL RIGHTS RESERVED</div>
    </div>
    
</nav>









<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home.beranda') }}">Personal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.beranda') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.profile') }}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.resume') }}">Resume</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{ route('home.skill') }}">Skill</a>
                    <a class="dropdown-item" href="{{ route('home.portfolio') }}">Portfolio</a>
                    <a class="dropdown-item" href="{{ route('home.contact') }}">Contact</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" placeholder="Search" type="text">
        </form>
    </div>
</nav>-->