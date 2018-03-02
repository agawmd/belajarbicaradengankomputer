@extends('template.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="title">
                <div class="title-h3">
                    HOME ADDRESS
                </div>
            </div>
            <div class="title-h4">
                Sapiria Street
                District Barombong,
                Gowa Regency
                <p>South Sulawesi Province, 90225</p>
                Central Indonesia Region
                <p>+6281341686169</p>
            </div>
            <div class="title">
                <div class="title-h3">
                    E-MAIL
                </div>                    
            </div>
            <div class="title-h4">
                <b>BUSINESS</b>
                <p>dagawaodemakani@outlook.com</p>
                <b>COLLEGE</b>
                <p>waode_13@kharisma.ac.id</p>
                <b>PERSONAL</b>
                <p>dagawaodemakani@gmail.com</p>
            </div>
            <div class="title">
                <div class="title-h3">
                    FOLLOW ME
                </div>                    
                <div class="icon">
                    <div class="img-icon"">
                        <a href="https://stackoverflow.com/users/7005172/waode-makani-daga?tab=profile" target="_blank"><img src="{{ URL::to('/icon/stack.png') }}"></a>
                    </div>
                    <div class="img-icon">
                        <a href="https://www.linkedin.com/in/agawmd/" target="_blank"><img src="{{ URL::to('/icon/linked.png') }}"></a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection