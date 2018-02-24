@extends('layouts.master')

@section('content')

<div class="header">
    <h1>Your name is {{ $soul }}</h1>
    <a href="{{ route('home.pic') }}">Tap this</a>
</div>   

@endsection
