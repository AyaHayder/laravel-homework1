@extends('Layout.leadingPage')

@section('title')
    Day 2
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
    <div class="row">
    <div class="col-md-6 col-md-offset-3 alphaBox " id="hw">
        <ul>
            <li><a href="hw"> Homework 1</a></li>
            <li><a href="Hw2"> Homework 2</a></li>
        </ul>
    </div>
    </div>
@endsection