@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/.css') }}">
@endsection

@section('content')
<div class="row">
    <img src="{{ asset('img/luwuk.jpeg') }}" alt="{{ asset('img/luwuk.jpeg') }}" class="rounded">
    
<!--    <img src="..." alt="..." class="rounded-top">
    <img src="..." alt="..." class="rounded-right">
    <img src="..." alt="..." class="rounded-bottom">
    <img src="..." alt="..." class="rounded-left">
    <img src="..." alt="..." class="rounded-circle">
    <img src="..." alt="..." class="rounded-0">-->
</div>


@endsection