@extends('layouts.master')

@section('content')

    <a href="{{ route('home.pic') }}">Repeat</a>&nbsp;
    <a href="{{ route('home.create') }}">Out of Game</a>

    
<div class="img">
    <img  src="{{ URL::to('/img/yes.gif') }}">        
</div>

@endsection
