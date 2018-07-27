@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="row">

    <div class="col-md-6">
        <img class="photo" src="{{ asset('/img/3x4.JPG') }}" alt="{{ asset('/img/3x4.JPG') }}">
    </div>
    
    <div class="col-md 6">
        <div class="box">
            BIODATA DIRI
        </div>
        <div class="text-box">
            
        </div>
    </div>
    
    
    <div class="col-md-6" style="font-family: monospace;">
        <img class="photo" src="{{ asset('/img/basri.jpg') }}" alt="{{ asset('/img/basri.jpg') }}">
        <div class="box">
            <h1>BIODATA DIRI</h1>
        </div>

        <div class="text-box">
            <div class="text-tx">Nama Lengkap : Basri Yasin</div>
            <div class="text-tx">Tempat/Tgl Lahir : Gorontalo, 08 Januari 1994 </div>
            <div class="text-tx">Alamat : Jakarta ..</div>
            <div class="text-tx">E-mail : basriyasin@gmail.com</div>
            <div class="text-tx">Phone Number : +62857 **** ****</div>
        </div>        
    </div>
    
    
    <div class="col-md-6" style="font-family: monospace;">
        <img class="photo" src="{{ asset('/img/aga.jpg') }}" alt="{{ asset('/img/aga.jpg') }}">
        <div class="box">
            <h1>BIODATA DIRI</h1>
        </div>

        <div class="text-box">
            <div class="text-tx">Nama Lengkap : Waode Makani Daga</div>
            <div class="text-tx">Tempat/Tgl Lahir : Gowa, 29 Oktober 1993 </div>
            <div class="text-tx">Alamat : Sapiria</div>
            <div class="text-tx">E-mail : dagawaodemakani@gmail.com</div>
            <div class="text-tx">Phone Number : +62813 **** ****</div>
        </div>        
    </div>
    
    <div class="col-md-6" style="font-family: monospace;">
        <img class="photo" src="{{ asset('/img/nana.jpg') }}" alt="{{ asset('/img/nana.jpg') }}">
        <div class="box">
            <h1>BIODATA DIRI</h1>
        </div>

        <div class="text-box">
            <div class="text-tx">Nama Lengkap : Masdiana Arifin</div>
            <div class="text-tx">Tempat/Tgl Lahir : Polewali Mandar, ... </div>
            <div class="text-tx">Alamat : BTN Minasa Sari Blok ..</div>
            <div class="text-tx">E-mail : geumnhana@gmail.com</div>
            <div class="text-tx">Phone Number : +62852 **** ****</div>
        </div>        
    </div>
    
    
    <div class="col-md-6" style="font-family: monospace;">
        <img class="photo" src="{{ asset('/icon/user.png') }}" alt="{{ asset('/icon/user.png') }}">
        <div class="box">
            <h1>BIODATA DIRI</h1>
        </div>

        <div class="text-box">
            <div class="text-tx">Nama Lengkap : Waode Makani Daga</div>
            <div class="text-tx">Tempat/Tgl Lahir : Gowa, 29 Oktober 1993 </div>
            <div class="text-tx">Alamat : Sapiria</div>
            <div class="text-tx">E-mail : dagawaodemakani@gmail.com</div>
            <div class="text-tx">Phone Number : +62813 **** ****</div>
        </div>        
    </div>  
</div>

@endsection