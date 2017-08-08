@extends('Layout.leadingPage')

@section('title')
    Day 3
@endsection

@section('css')
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
@endsection

@section('style')
    background-image:url('/../../images/iPad_CIO.jpg');
    background-size: cover;
@endsection

@section('content')
    <div class="conatainer-fluid">
    <div class="row " style="margin-top: 4em">
        <div class="col-md-4 col-md-offset-4 col-xs-12 alphaBox " style=" background-image:url('../../../images/471045992.jpg');
         opacity: 0.4; background-repeat: no-repeat; background-size: cover">
            <div class="Txt">
            <fieldset name="loginFieldset">
                <form name="loginForm">
                    <h1 id="plsSignUpTxt">Sign up </h1>
                    <label>Name:</label>
                    <input type="text" name="username" >
                    <br><br>
                    <label>Password: </label>
                    <input type="password" name="password">
                    <br><br>
                    <label>Confirm Password: </label>
                    <input type="password" name="passwordConfirmed">
                    <br><br>
                    <label>E-mail: </label>
                    <input type="text" name="emailPart1" size="10"> @ <input type="text" name="emailPart2" size="10"> .com
                    <br><br>
                    <button>Submit Form</button>

                </form>
            </fieldset>
        </div>
    </div>
    </div>
    </div>
@endsection