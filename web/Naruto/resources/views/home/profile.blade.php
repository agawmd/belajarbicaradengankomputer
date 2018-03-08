@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="row">
    
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
        <img class="photo" src="{{ asset('/img/basri.jpg') }}" alt="{{ asset('/img/basri.jpg') }}">
        <div class="box">
            <h1>BIODATA DIRI</h1>
        </div>

        <div class="text-box">
            <div class="text-tx">Nama Lengkap : Basri Yasin</div>
            <div class="text-tx">Tempat/Tgl Lahir : Gorontalo, 08 Januari 1994 </div>
            <div class="text-tx">Alamat : Jl. Urip Sumoharjo ..</div>
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
    
    
    
    
    
    
    
    
    
    
    
    <img class="photo" src="{{ asset('img/A.png') }}" alt="{{ asset('img/A.png') }}">
    <div class="posisi" style="padding-left: 190px;">
        <p class="text-lg">
            BIODATA DIRI
        </p>

        <p class="text-sm">
            Nama Lengkap&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; Waode Makani Daga<br>
            Jenis Kelamin&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; Perempuan<br>
            Tempat/Tgl Lahir :&nbsp; Gowa, 29 Oktober 1993<br>
            Kebangsaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; Indonesia<br>
            Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; Islam<br>
            Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; Sapiria<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RT/RW 002/006<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benteng Somba Opu<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barombong<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gowa<br>
            Height/Weight&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; 155 cm / 65 kg<br>
            Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; +6281 3416 86169<br>
        </p>
    </div>
   
    <div class="tabel">
        <table>
            <thead>
                <tr style="background-color: white; text-align: center;">
            <h3 style="text-align: center;">Riwayat Pendidikan</h3>
            <td style="text-align: center; padding-right: 16px;">
                        Pendidikan
                    </td>
                    <td style="padding-right: 30px; padding-left: 225px;">
                        Jenjang Tahun
                    </td>                   
                </tr>

              
            </thead>
            <tbody class="tengah">
                <tr>
                    <td>
                        TK KEMALA BHAYANGKARI
                    </td>
                    <td style="padding-left: 198px;">
                        1999 - 2000
                    </td>
                </tr>
                <tr>
                    <td>
                        SD INPRESS MACCINI BARU
                    </td>
                    <td style="padding-left: 198px;">
                        2000 - 2006
                    </td>
                </tr>
                <tr>
                    <td>
                        SMP SATRIA MAKASSAR
                    </td>
                    <td style="padding-left: 198px;">
                        2006 - 2009
                    </td>
                </tr>
                <tr>
                    <td>
                        SMA SATRIA MAKASSAR
                    </td>
                    <td style="padding-left: 198px;">
                        2009 - 2012
                    </td>
                </tr>
                <tr>
                    <td>
                        STMIK KHARISMA MAKASSAR
                    </td>
                    <td style="padding-left: 193px;">
                        2012 - now
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="col-md-6">
        <div style="padding-top: 40px;">
            <i>Thank you</i>
        </div>        
    </div>
    
    
</div>

@endsection