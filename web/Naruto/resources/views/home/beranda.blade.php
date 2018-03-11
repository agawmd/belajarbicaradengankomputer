@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->
<div class="row">
    <div class="col-md-6">
        <div class="logo">
            <img class="thumbnail" src="{{ asset('img/project/kampus.png') }}" alt="{{ asset('img/project/kampus.png') }}">                
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="home-page">
            <div class="slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/jakarta.jpg') }}" alt="{{ asset('img/jakarta.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/gorontalo.jpeg') }}" alt="{{ asset('img/gorontalo.jpeg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/luwuk.jpeg') }}" alt="{{ asset('img/luwuk.jpeg') }}">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>                
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="info-part">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            PROGRAM STUDI
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Rekayasa Perangkat Lunak</a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#">Sistem Informasi Manajemen</a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#">Grafik Komputer dan Multimedia</a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#">Jaringan Komputer</a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#">Sistem Informasi Akuntansi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            DOWNLOAD BERKAS
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <a href="#">Jadwal Perkuliahan</a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#">Jadwal Ujian Semester</a>
                                    </div>
                                    <div class="card-body">
                                        <a href="#">Jadwal Seminar Proposal</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            INFO LOKER
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        (Progress...)
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>

@endsection