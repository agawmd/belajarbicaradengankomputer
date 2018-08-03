@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="row">

    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-8">
                <div class="box">
                    <div class="sapa">Say Hi It's Free !</div>
                    <div class="row batas">
                        <div class="col-sm-3 col-sm-1">
                            <img class="gam" src="{{ asset('/icon/tag/negara.png') }}" alt="{{ asset('/icon/negara.png') }}">
                        </div>
                        <div class="col-sm-6 col-sm-4">
                            <div class="loc">Sapiria, Sulawesi Selatan, Indonesia.</div>
                        </div>
                    </div>
                    <div class="row batas">
                        <div class="col-sm-3 col-sm-1">
                            <img class="gam" src="{{ asset('/icon/tag/email.png') }}" alt="{{ asset('/icon/negara.png') }}">
                        </div>
                        <div class="col-sm-3 col-sm-1">
                            <div class="loc">dagawaodemakani@gmail.com</div>
                        </div>
                    </div>
                    <div class="row batas">
                        <div class="col-sm-3 col-sm-1">
                            <img class="gam" src="{{ asset('/icon/tag/hp.png') }}" alt="{{ asset('/icon/hp.png') }}">
                        </div>
                        <div class="col-sm-3 col-sm-1">
                            <div class="loc">(+62)813-4168-6169</div>
                        </div>
                    </div>
                    <div class="pain">I'm also on Social Network</div>
                    <div class="lurus">
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
    
    <div class="col-md-6">
        <img class="foto" src="{{ asset('/img/indonesia.jpg') }}" alt="{{ asset('/img/indonesia.jpg') }}">
    </div>
</div>

@endsection
