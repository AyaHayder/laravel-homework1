@extends('Layout.leadingPage')

@section('title')
    Day 3
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


@section('content')
    <div class="alphaBox center text-center textSize">
    Still working on Day 3's homework<br />
    because I got a "No Access-Control-Origin" error<br />
    and to handle it I have to do something to the htaccess<br />
    and I haven't yet searched on how to do that<br />
    I promise to send it once I get time to search for htaccess and fix the error ( ^ ^")
    </div>
@endsection