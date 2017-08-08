@extends('Layout.leadingPage')

@section('title')
    Day 5
@endsection

@section('tasks')
    active
@endsection

@section('css')

    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
@endsection

@section('style')
    background-image:url('/../../images/cup-hot-coffee-diary-wood-table-background-58958062.jpg');
    background-size: cover;
@endsection

@php
$x=array("divClass"=>"thumbnail","imageSrc"=>"http://codelab.camp/android.png","imgclass"=>"img-responsive",
    "h3"=>'Android Version',"p"=>"...");
$y=array("divClass"=>"thumbnail","imageSrc"=>"https://raw.githubusercontent.com/CodeLabBootcamp/SimpleBootstrapPage/dd8203c83e302fdabcc15053d959f9b55e6da096/images/swift.png",
    "imgclass"=>"img-responsive","h3"=>"iOS version","p"=>"...<br><br>");
$z= array("divClass"=>"thumbnail","imageSrc"=>"http://codelab.camp/laravel.png","imgclass"=>"img-responsive",
    "h3"=>"Web version","p"=>"...<br><br>");
@endphp

@section('content')
    @each('pages.imageRendering',[$x,$y,$z],'data')
@endsection