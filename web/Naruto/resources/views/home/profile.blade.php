@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="row">
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