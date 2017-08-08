@extends('Layout.leadingPage')

@section('title')
    My CodeLab Tasks
@endsection

@section('css')

    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
@endsection

@section('tasks')
    active
@endsection

@section('style')
   background-image:url('/../../images/cup-hot-coffee-diary-wood-table-background-58958062.jpg');
    background-size: cover;
@endsection

@section('content')
    <div class="row ">
        <div class="col-md-6 col-md-offset-3 alphaBox " id="hw">
            <ul>
                <li><a href="index"> Day 1</a></li>
                <li><a href="secondDay"> Day 2</a></li>
                <li><a href="thirdDay">Day 3</a></li>
                <li><a href="fourthDay">Day 4</a></li>
                <li><a href="fifthDay">Day 5</a></li>
                <li><a href="#">Day 6</a></li>
                <li><a href="#">Day 7</a></li>
                <li><a href="#">Day 8</a></li>
                <li><a href="#">Day 9</a></li>
                <li><a href="#">Day 10</a></li>

            </ul>
        </div>
    </div>
@endsection
    