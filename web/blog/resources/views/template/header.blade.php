<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="{{ route('home.beranda') }}">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ router('home.beranda') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ router('home.profil') }}">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ router('home.pengalaman') }}">Pengalaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ router('home.keahlian') }}">Keahlian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ router('home.penghargaan') }}">Penghargaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ router('home.kontak') }}">Kontak</a>
            </li>
        </ul>
    </div>
</nav>
