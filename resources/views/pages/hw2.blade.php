@extends('Layout.leadingPage')

@section('title')
    homework 2
@endsection

@section('css')

    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
@endsection

@section('style')
    background-image:url('/../../images/cup-hot-coffee-diary-wood-table-background-58958062.jpg');
    background-size: cover;
@endsection

@section('content')
    <div id="root">
        <ul>
            <h3>All tasks:</h3>
            <li v-for="x in tasks">@{{x.info}}</li>
            <h3>Completed tasks</h3>
            <li v-for="x in tasks" v-if="x.completed"><button @click="!x.completed">-</button> @{{x.info}}</li>
            <h3>Incomplete tasks</h3>
            <li v-for="x in tasks" v-if="!x.completed" ><button @click="x.completed">-</button> @{{x.info}}</li>
        </ul>
    </div>

    <script>
        var vm = new Vue({
            el:"#root",
            data:{

                tasks:[
                    {"info":"Go to home","completed":true},
                    {"info":"Clean the Room","completed":false},
                    {"info":"Go to store","completed":true},
                    {"info":"Visit your father","completed":false}
                ]
            },

        })
    </script>

@endsection