@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="line-top"></div>
    </div>
    <div class="col-md-4">
        <div class="box-tag">ABOUT ME</div>        
    </div>
    <div class="col-md-4">
        <div class="line-top"></div>        
    </div>
    
    <div class="col-md-4">
        <div class="row line-middle-one">
            <div class="col-sm-6">
                <div class="name">
                    <div class="title">Name</div>
                    <div class="sub">Waode Makani Daga</div>
                </div>
                <div class="phone">
                    <div class="title">Phone</div>
                    <div class="sub">(+62)813-4168-6169</div>
                </div>
                <div class="mail">
                    <div class="title">Email</div>
                    <div class="sub">dagawaodemakani@gmail.com</div>
                </div>                
            </div>
            <div class="col-sm-6">
                <div class="dob">
                    <div class="title">Date of Birth</div>
                    <div class="sub">October 29th 1993</div>
                </div>
                <div class="address">
                    <div class="title">Address</div>
                    <div class="sub">Gowa, South Sulawesi</div>
                </div>
                <div class="nation">
                    <div class="title">Nationality</div>
                    <div class="sub">Indonesia</div>
                </div>
            </div>                
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="photo-frame"><img class="photo" src="{{ asset('/img/3x4.JPG') }}" alt="{{ asset('/img/3x4.JPG') }}"></div>
    </div>  
    
    <div class="col-md-4">
        <div class="row line-middle-two">
            <div class="col-sm-12">
                <div class="intro-box">
                    <div class="intro">INTRODUCE</div>
                    <div class="intro-text">
                        Introduce me Aga, that is my nickname. I am a beginner programmer in several languages, in the last two semesters I have learned the Java language, PHP, Visual Basic (.NET) and the use of the Laravel Framework. In addition, I am interested in managing a database information system and designing user interfaces on multiple platforms.
                        The result of my first freelance work was to design the user interface and provide feedback, so that users can interact easily in using it.
                    </div>                    
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection

<!--
    <div class="col-md-4">
        <div class="one">
            <div class="card" style="width: 14rem;">
              <img class="card-img-top" src="{{ asset('/img/3x4.JPG') }}" alt="{{ asset('/img/3x4.JPG') }}">
              <div class="card-body">
                <div class="card-text">
                    <div class="pain">
                        <div class="icon-bar tip">
                            <a href="https://www.linkedin.com/in/agawmd/" target="_blank" title="Linked In"><img class="ikon" src="{{ asset('/icon/link.png') }}" alt="{{ asset('/icon/link.png') }}"></a>                        
                        </div>
                        <div class="icon-bar tip">
                            <a href="https://www.instagram.com/aga_wmd/" target="_blank" title="Instagram"><img class="ikon" src="{{ asset('/icon/ints.png') }}" alt="{{ asset('/icon/ints.png') }}"></a>                        
                        </div>                        
                    </div>
                </div>
              </div>
            </div>                        
        </div>
    </div>

    <div class="col-md-8 batas-bes">
        <div class="row">
            <div class="col-sm-6 col-sm-1">
                <div class="row batas-kec">
                    <div class="col-sm-2 col-sm-1"><img class="gam" src="{{ asset('/icon/tag/orang.png') }}" alt="{{ asset('/icon/orang.png') }}"></div>
                    <div class="col-sm-8 col-sm-1">
                        <div class="tulis">
                            <div class="judul">Name :</div>
                            <div class="isi">Waode Makani Daga</div>                    
                        </div>                        
                    </div>
                </div>
                <div class="row batas-kec">
                    <div class="col-sm-2 col-sm-1"><img class="gam" src="{{ asset('/icon/tag/kalender.png') }}" alt="{{ asset('/icon/kalender.png') }}"></div>
                    <div class="col-sm-8 col-sm-1">
                        <div class="tulis">
                            <div class="judul">Date of Birth :</div>
                            <div class="isi">29 October 1993</div>                    
                        </div>                        
                    </div>
                </div>
                <div class="row batas-kec">
                    <div class="col-sm-2 col-sm-1"><img class="gam" src="{{ asset('/icon/tag/alamat.png') }}" alt="{{ asset('/icon/alamat.png') }}"></div>
                    <div class="col-sm-8 col-sm-1">
                        <div class="tulis">
                            <div class="judul">Address :</div>
                            <div class="isi">Sapiria, <i>South Sulawesi</i></div>                    
                        </div>                        
                    </div>
                </div>                
            </div>
            <div class="col-sm-6 col-sm-1">
                <div class="row batas-kec">
                    <div class="col-sm-2 col-sm-1"><img class="gam" src="{{ asset('/icon/tag/hp.png') }}" alt="{{ asset('/icon/hp.png') }}"></div>
                    <div class="col-sm-8 col-sm-1">
                        <div class="tulis">
                            <div class="judul">Phone Number :</div>
                            <div class="isi">(+62)813-4168-6169</div>                    
                        </div>                        
                    </div>
                </div>
                <div class="row batas-kec">
                    <div class="col-sm-2 col-sm-1"><img class="gam" src="{{ asset('/icon/tag/email.png') }}" alt="{{ asset('/icon/email.png') }}"></div>
                    <div class="col-sm-8 col-sm-1">
                        <div class="tulis">
                            <div class="judul">Send me mail :</div>
                            <div class="isi">dagawaodemakani@gmail.com</div>                    
                        </div>                        
                    </div>
                </div>
                <div class="row batas-kec">
                    <div class="col-sm-2 col-sm-1"><img class="gam" src="{{ asset('/icon/tag/negara.png') }}" alt="{{ asset('/icon/negara.png') }}"></div>
                    <div class="col-sm-8 col-sm-1">
                        <div class="tulis">
                            <div class="judul">Nationality :</div>
                            <div class="isi">Indonesia</div>                    
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>-->
