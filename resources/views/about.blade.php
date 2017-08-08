@extends('Layout.master')
<html>
    <head>
        <title>
            About us
        </title>
    </head>
    <body>
       {{-- @unless($var)
            <h1>false</h1>
        @endunless --}}

     {{-- @for($i=0; $i<10;$i++ )
          <li>{{$i}}</li>
      @endfor
      @forelse($names as $name)
            <li>{{$name}}</li>
      @empty
            <li>Empty</li>
      @endforelse
       @foreach($names as $name)
            <li>{{$loop->index}}</li>
            <li>{{$loop-> first}}</li>
            <li>{{$loop->last}}</li>
            <li>{{$loop->remaining}}</li>
            <li>{{$loop->depth }}</li>
        @endforeach
        @empty("")
            <h1>hello ninjas</h1>
        @endempty

        @isset($j)
            <h1>found Var</h1>
        @endisset --}}
    @each('welcome',['Ali','Nael','Jassim','Sabri'],'name')



    </body>
</html>