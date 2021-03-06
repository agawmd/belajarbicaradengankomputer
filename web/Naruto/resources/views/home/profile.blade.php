@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
@endsection

@section('content')
<div class="row fadeIn">
    
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>

    <div class="col-md-4">
        <div class="image-box">
            <img class="image-profile" src="{{ asset('/img/profile.png') }}" alt="{{ asset('/img/profile.png') }}">
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="intro-box">
            <div class="intro-data">
                <h1>I am ..</h1>
                <div class="data">
                    <i class="icon-data fas fa-user"></i>Waode Makani Daga
                </div>
                <div class="data">
                    <i class="icon-data fas fa-calendar-alt"></i>October 29th 1993
                </div>                                          
                <div class="data">
                    <i class="icon-data fas fa-map-signs"></i>Sapiria, Barombong District - Gowa Regency 
                </div> 
                <div class="data">
                    <i class="icon-data fas fa-map-marker-alt"></i>South Sulawesi -  Indonesia
                </div>                                          
            </div>

            <div class="intro-social">
                <h5>Find me on</h5>
                <a href="https://www.linkedin.com/in/agawmd/" target="_blank" style="color: black;"><i class="icon fab fa-linkedin-in"></i><a/>
                <a href="https://github.com/agawmd" target="_blank" style="color: black;"><i class="icon fab fa-github"></i></a>                
            </div>

        </div>        
    </div>
    
    <div class="col-md-4">
        <div class="intro-box">
            <h1>By The Way</h1>
            <div class="intro-text">
                Introduce me Aga, that is my nickname. I'd love writing but not simple at all as I wrote the code cause I am a beginner programmer in several languages, in the last two semesters I have learned the Java language, Visual Basic (.NET), PHP and the use of the Laravel Framework. In addition, I am interested in managing a database information system and designing user interfaces on multiple platforms.
                The result of my first freelance work was to design the user interface and provide feedback, so that users can interact easily in using it.                
            </div>
            <div class="intro-button">
                <a href="{{ route('home.contact') }}">
                    <button class="button-style">contact me</button>
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>
    
</div>

@endsection

<!--    
    <div class="col-md-2">
        <div class="header-box bounceIn">
            <div class="header-title">ABOUT ME</div>
            <div class="underline"></div>
            <div class="header-icon">
                <img class="icon" src="{{ asset('/icon/tag/female.png') }}" alt="{{ asset('/icon/tag/female.png') }}">
            </div>
        </div>        
    </div>

    <div class="col-md-6">
        <div class="intro-box">
            <div class="intro-text">
                Introduce me Aga, that is my nickname. I'd love writing but not simple at all as I wrote the code cause I am a beginner programmer in several languages, in the last two semesters I have learned the Java language, Visual Basic (.NET), PHP and the use of the Laravel Framework. In addition, I am interested in managing a database information system and designing user interfaces on multiple platforms.
                The result of my first freelance work was to design the user interface and provide feedback, so that users can interact easily in using it.                
            </div>
            <div class="data-box">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="data">
                            <img class="icon-data" src="{{ asset('/icon/tag/user.png') }}" alt="{{ asset('/icon/tag/user.png') }}"> Waode Makani Daga
                        </div>
                        <div class="data">
                            <img class="icon-data" src="{{ asset('/icon/tag/calender.png') }}" alt="{{ asset('/icon/tag/calender.png') }}"> October 29th 1993
                        </div>
                        <div class="data">
                            <img class="icon-data" src="{{ asset('/icon/tag/address.png') }}" alt="{{ asset('/icon/tag/address.png') }}"> South Sulawesi
                        </div>                        
                    </div>
                    <div class="col-sm-6">
                        <div class="data">
                            <img class="icon-data" src="{{ asset('/icon/tag/email.png') }}" alt="{{ asset('/icon/tag/email.png') }}"> dagawaodemakani@gmail.com
                        </div>                        
                        <div class="data">
                            <img class="icon-data" src="{{ asset('/icon/tag/smartphone.png') }}" alt="{{ asset('/icon/tag/smartphone.png') }}"> (+62)813-4168-6169
                        </div>                        
                        <div class="data">
                            <img class="icon-data" src="{{ asset('/icon/tag/region.png') }}" alt="{{ asset('/icon/tag/region.png') }}"> Indonesia
                        </div>                        
                    </div>                   
                </div>                
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="image-box  bounceIn">
            <img class="image" src="{{ asset('/img/profile.png') }}" alt="{{ asset('/img/profile.png') }}">
            <div class="icon-link-box">
                <a href="https://www.linkedin.com/in/agawmd/" target="_blank" title="Linked In"><img class="icon-link" src="{{ asset('/icon/linkedin.png') }}" alt="{{ asset('/icon/linkedin.png') }}"></a>
                <a href="https://www.instagram.com/aga_wmd/" target="_blank" title="Instagram"><img class="icon-link" src="{{ asset('/icon/instagram.png') }}" alt="{{ asset('/icon/intagram.png') }}"></a>
                <a href="https://www.hackerrank.com/aga_wmd?hr_r=1" target="_blank" title="Hacker Rank"><img class="icon-link" src="{{ asset('/icon/hacker-rank.png') }}" alt="{{ asset('/icon/hacker-rank.png') }}"></a>                
            </div>
        </div>
    </div>-->