@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="row">
    
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
    
    
    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-4">
                <div class="intro-box">
                    <div class="intro-title">ABOUT ME</div>
                    <div class="underline"></div>
                    <div class="intro-icon">
                        <img class="icon" src="{{ asset('/icon/tag/female.png') }}" alt="{{ asset('/icon/tag/female.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="intro-box">
                    <div class="intro-text">
                        Introduce me Aga, that is my nickname. I'd love writing but not simple at all as I wrote the code cause I am a beginner programmer in several languages, in the last two semesters I have learned the Java language, PHP, Visual Basic (.NET) and the use of the Laravel Framework. In addition, I am interested in managing a database information system and designing user interfaces on multiple platforms.
                        The result of my first freelance work was to design the user interface and provide feedback, so that users can interact easily in using it.                
                    </div>                      
                </div>
            </div>
        </div>
    </div>  
    
    
    <div class="col-md-4">
        <div class="image-frame">
            <img class="image" src="{{ asset('/img/profile.jpg') }}" alt="{{ asset('/img/profile.jpg') }}">
            <div class="icon-bar">
                <a href="#" target="_blank" title="Linked In"><img class="icon-post" src="{{ asset('/icon/linkedin.png') }}" alt="{{ asset('/icon/linkedin.png') }}"></a>
                <a href="#" target="_blank" title="Instagram"><img class="icon-post" src="{{ asset('/icon/instagram.png') }}" alt="{{ asset('/icon/intagram.png') }}"></a>
                <a href="#" target="_blank" title="Skype"><img class="icon-post" src="{{ asset('/icon/skype.png') }}" alt="{{ asset('/icon/skype.png') }}"></a>                
            </div>
        </div>
    </div>     
    
    <div class="col-md-4">
        <div class="profile-box">
            <div class="profile">
                Waode Makani Daga
                <img class="tag" src="{{ asset('/icon/tag/user.png') }}" alt="{{ asset('/icon/tag/user.png') }}">
            </div>
            <div class="profile">
                October 29th 1993
                <img class="tag" src="{{ asset('/icon/tag/kalender.png') }}" alt="{{ asset('/icon/tag/kalender.png') }}">
            </div>
            <div class="profile">
                Sapiria, Gowa, South Sulawesi
                <img class="tag" src="{{ asset('/icon/tag/alamat.png') }}" alt="{{ asset('/icon/tag/alamat.png') }}">
            </div>
            <div class="profile">
                (+62) 8134 - 1686 - 169
                <img class="tag" src="{{ asset('/icon/tag/hp.png') }}" alt="{{ asset('/icon/tag/hp.png') }}">
            </div>
            <div class="profile">
                dagawaodemakani@gmail.com
                <img class="tag" src="{{ asset('/icon/tag/email.png') }}" alt="{{ asset('/icon/tag/email.png') }}">
            </div>

            <div class="profile">
                Indonesia
                <img class="tag" src="{{ asset('/icon/tag/negara.png') }}" alt="{{ asset('/icon/tag/negara.png') }}">
            </div>
        </div>
    </div>    

    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>
    
</div>

@endsection