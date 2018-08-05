@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="row slide">
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
                    <div class="intro">INTRO</div>
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