@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/resume.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div id="back">
            <div id="textback">Experience</div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="judul">Experience</div>        
    </div>
    <div class="col-md-2">
        <img class="ikon" src="{{ asset('/logo/tssc.jpg') }}">
    </div>
    <div class="col-md-4">
        <div class="tgl">
            <div class="nama">Taman Surya Sport Club (Freelance)</div>
            <div class="lama">Sep 2015 - Nov 2015</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="desc">
            <div class="prof">UI Designer</div>
            <div class="isi">
                <li>Disini</li>
            </div>
        </div>
    </div>
</div>
@endsection
