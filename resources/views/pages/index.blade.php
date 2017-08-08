@extends('Layout.leadingPage')

@section('title')
    Home
@endsection

@section('index')
    active
@endsection

@section('css')
    <style>
        .section3{
            background-color:#e1696a;
            background-repeat:no-repeat;
            background-image: url('http://codelab.camp/ninja.png');
            background-position:90% 0%;
            background-size:contain;
            color:#ffffff;
            margin-top: 1em;
            padding-bottom:1em;
        }
        .section4{
            background-color:#2b2b2b;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                <h1>Code the Right Way</h1>
                <p  class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dignissimos dolores illo iure maiores odio reiciendis, rem veritatis.
                    Cum deleniti illum minima molestiae, officia, perspiciatis praesentium
                    reprehenderit sapiente tempore veniam voluptatem?
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-2 col-lg-offset-3 col-sm-6">
                <div class="thumbnail">
                    <img src="http://codelab.camp/android.png" alt="..." class="img-responsive">
                    <div class="caption">
                        <h3>Android Version</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">click here</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="thumbnail">
                    <img src="https://raw.githubusercontent.com/CodeLabBootcamp/SimpleBootstrapPage/dd8203c83e302fdabcc15053d959f9b55e6da096/images/swift.png" alt="..."
                         class="img-responsive">
                    <div class="caption">
                        <h3>iOS version</h3>
                        <p>... <br><br></p>
                        <p><a href="#" class="btn btn-primary" role="button">Click here</a></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="thumbnail">
                    <img src="http://codelab.camp/laravel.png" alt="..." class="img-responsive">
                    <div class="caption">
                        <h3>Web version</h3>
                        <p>...<br><br></p>
                        <p><a href="#" class="btn btn-primary" role="button">Click here</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section3">
            <div class="col-lg-8 col-lg-offset-1 col-xs-12">
                <div class="text-left">
                    <h1>Be a Ninja</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Amet beatae consectetur consequatur cum delectus dolorem,
                        eligendi hic illo iure maiores molestias obcaecati odit quae quis repellendus vel,
                        vitae voluptate voluptatum!</p>
                    <button class="btn btn-lg btn-default">Let's Begin</button>
                </div>

            </div>
        </div>
        <div class=" row section4">
            <div class="col-lg-8 col-offset-1">
                <p class="footer text-left" style="color:#fff;padding:0.5em;">&copy 2017 Codelab, All Rights Reserved</p>
            </div>

        </div>
    </div>
@endsection