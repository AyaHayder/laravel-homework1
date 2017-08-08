@extends('Layout.leadingPage')

@section('title')
    homework 1
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
            <li v-for="(x,index) in names"><button v-on:click="removeName(index)" > -</button> @{{x}} </li>
        </ul>

        <input type="text" placeholder="type something" v-model="input" @keyup.13="addNewName" style="margin-left:1em;">
        <button v-on:click="addNewName">Add</button>
    </div>
    <script>
        var vm = new Vue({
            el:"#root",
            data: {

                bool:true,
                names:["Ali","Jassim","Sabri"],
                input: "",
            },
            methods:{
                addNewName : function () {
                    if(this.input== ''){
                        alert("please, enter a name")
                    }
                    else {
                        this.names.push(this.input);
                        this.input= '';
                    }
                },
                removeName: function (index) {
                    this.names.splice(index,1)
                }

            }
        });
        </script>

@endsection