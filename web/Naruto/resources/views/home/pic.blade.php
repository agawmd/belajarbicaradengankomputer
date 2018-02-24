@extends('layouts.master')

@section('content')

    <a href="{{ route('home.agree') }}">Love me a lot</a> &nbsp;
    <a href="{{ route('home.disagree') }}">Kiss me more</a>

<div class="img">
    <img  src="{{ URL::to('/img/choose.jpg') }}" height="500" width="500">        
</div>

@endsection
