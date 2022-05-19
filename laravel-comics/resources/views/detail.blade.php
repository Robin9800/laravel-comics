@extends('layout.app')

@section('content')
    <div class="detail/">
        <h2>{{$comic['title']}}</h2>
        <img src="{{$comic['thumb']}}" alt="">
        <p>{{$comic['description']}}</p>
        <h3>{{$comic['price']}}</h3>
    </div>

    <button>
        <!--Nell'"a" inserisco '/' per tornare indietro di una pagina-->
        <a href="/">Indietro</a>
    </button>
@endsection