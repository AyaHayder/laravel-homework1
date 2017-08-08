@extends('Layout.leadingPage')

@section('title')
    Sign in
@endsection

@section('css')

    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
@endsection

@section('style')
    background-image:url('/../../images/tim-hieu-ve-chuot-may-tinh-va-nhung-loai-chuot-may-tinh-thong-dung-hien-nay.jpg');
    background-size: cover;
@endsection

@section('content')
    <div class="conatainer-fluid">
        <div class="row " style="margin-top: 4em">
            <div class="col-md-4 col-md-offset-4 col-xs-12 alphaBox ">
                <div class="Txt">
                <fieldset name="loginFieldset">
                    <form name="loginForm">
                        <h1 id="plsLoginTxt">Please Sign in <span class="glyphicon glyphicon-lock pull-right" ></span></h1>
                        <label>Username:</label>
                        <input type="text" name="username" >
                        <br><br>
                        <label>Password: </label>
                        <input type="password" name="password">
                        <br><br>
                        <button name="loginSubmit"> Log in </button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    </div>

@endsection