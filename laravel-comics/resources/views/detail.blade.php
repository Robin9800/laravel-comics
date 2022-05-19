@extends('layout.app')

@section('content')
    <div class="detail/">
        <h2>{{$comic['series']}}</h2>
        <h3>{{$comic['title']}}</h3>
        <img src="{{$comic['thumb']}}" alt="">
        <p>{{$comic['description']}}</p>
        <h4>{{$comic['price']}}</h4>
    </div>

    <button>
        <!--Nell'"a" inserisco '/' per tornare indietro di una pagina-->
        <a href="/">Indietro</a>
    </button>
@endsection