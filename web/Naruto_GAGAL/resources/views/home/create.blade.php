@extends('layouts.master')

@section('content')

<div class="container">
    <div class="header">
        <h1><b>Love me more</b></h1>
        <h5>express your feelings</h5>
        lalalalalaallasdfasdfasdfadsalaalalalalal
    </div>

<!--    @if(isset($name))
    <div class="alert alert-warning alert-dismissible" role="alert">
        Halo <strong>{{$name}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">$times;</span>
        </button>
    </div>
    @endif-->

    <div class="form">
        <form action="{{ route('home.show') }}" method="post" id="form1">
            {{ csrf_field() }}
            <div class="form-group">
                <input name="name" id="name" class="form-control" placeholder="Your Full Name"/>                
            </div>
            <br>
            <div class="form-group">
                <input style="cursor:pointer" type="submit" class="btn btn-primary" id="submit" value="Show into Dashboard">
            </div>
        </form>
    </div>
</div>

<!--<div class="luar">
    luar
    <div class="tengah">
        tengah
        <div class="dalam">
            dalam
        </div>
    </div>
</div>-->
@endsection


