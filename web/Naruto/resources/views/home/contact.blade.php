@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="row">

    <div class="col-md-3">
        <div class="third">
            Want to Talk
        </div>
        <div class="fourth">
            <u>+62813 4168 6169</u> via Mobile Phone<br>
            <u>+62878 4102 7159</u> via Mobile Legend<br>
            <u>@aga_wmd</u> via Skype<br>
            <u>dagawaodemakani@gmail.com</u>
        </div>
        <div class="third">
            Contact with Me
        </div>
        <div class="icon-bar">
            <img src="{{ asset('/icon/evernote.png') }}" alt="{{ asset('/icon/evernote.png') }}">
            <img src="{{ asset('/icon/blog.png') }}" alt="{{ asset('/icon/blog.png') }}">
            <img src="{{ asset('/icon/linkedin.png') }}" alt="{{ asset('/icon/linkedin.png') }}">
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="bingkai">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('/img/sama3.jpeg') }}" alt="{{ asset('/img/sayang45.jpeg') }}">
              <div class="card-body">
                <p class="card-text">
                    Mr and Mrs Basri Yasin
                </p>
              </div>
            </div>                        
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="quote">
            <p>
                <i>
                    I'm sorry I constantly want to talk to you.
                    I'm sorry when you take long to reply, I get sad.
                    I'm sorry if I say things that might piss you off.
                    I'm sorry if I come off as annoying.
                    I'm sorry if you don't wanna talk to me as much as I wanna talk to you.
                    I'm sorry if I think about you too much and too often.
                    I'm sorry if I say things that I don't really mean it.
                    I'm sorry if I tell you about my pointless drama when you don't really care.
                    I'm sorry if I come off as being clingy, but <u>it's just me missing you.</u>

                </i>
            </p>        
        </div>
    </div>
        
</div>

@endsection
