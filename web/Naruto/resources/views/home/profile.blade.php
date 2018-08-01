@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="one">
            <div class="card" style="width: 14rem;">
              <img class="card-img-top" src="{{ asset('/img/3x4.JPG') }}" alt="{{ asset('/img/3x4.JPG') }}">
              <div class="card-body">
                <div class="card-text">
                    <div class="icon-bar tip">
                        <a href="https://www.linkedin.com/in/agawmd/" target="_blank"><img class="ikon" src="{{ asset('/icon/link.png') }}" alt="{{ asset('/icon/link.png') }}">
                            <span class="tiptext">Linked In</span>
                        </a>                        
                    </div>
                    <div class="icon-bar tip">
                        <a href="https://www.instagram.com/aga_wmd/" target="_blank"><img class="ikon" src="{{ asset('/icon/ints.png') }}" alt="{{ asset('/icon/ints.png') }}">
                            <span class="tiptext">Instagram</span>
                        </a>                        
                    </div>
                </div>
              </div>
            </div>                        
        </div>
    </div>

    <div class="col-md-8">
        <div class="article">
            <img class="gam" src="{{ asset('/icon/tag/orang.png') }}" alt="{{ asset('/icon/orang.png') }}">
            <div class="tulis">
                <div class="judul">Name :</div>
                <div class="isi">Waode Makani Daga</div>                    
            </div>
            <img class="gam" src="{{ asset('/icon/tag/kalender.png') }}" alt="{{ asset('/icon/kalender.png') }}">
            <div class="tulis">
                <div class="judul">Date of Birth :</div>
                <div class="isi">29 October 1993</div>                    
            </div>
            <img class="gam" src="{{ asset('/icon/tag/alamat.png') }}" alt="{{ asset('/icon/alamat.png') }}">
            <div class="tulis">
                <div class="judul">Address :</div>
                <div class="isi">Sapiria, <i>South Sulawesi</i></div>                    
            </div>        

            <img class="gam" src="{{ asset('/icon/tag/hp.png') }}" alt="{{ asset('/icon/hp.png') }}">
            <div class="tulis">
                <div class="judul">Phone :</div>
                <div class="isi">(+62)813-4168-6169</div>                    
            </div>
            <img class="gam" src="{{ asset('/icon/tag/email.png') }}" alt="{{ asset('/icon/email.png') }}">
            <div class="tulis">
                <div class="judul">E-mail :</div>
                <div class="isi">dagawaodemakani@gmail.com</div>                    
            </div>
            <img class="gam" src="{{ asset('/icon/tag/negara.png') }}" alt="{{ asset('/icon/negara.png') }}">
            <div class="tulis">
                <div class="judul">Nationality :</div>
                <div class="isi">Indonesia</div>                    
            </div>        
        </div>        
    </div>
</div>

@endsection