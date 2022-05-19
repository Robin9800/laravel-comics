@extends('layout.app')

@section('content')
    @dump($comic)
    <div class="detail/">
        <h2>{{$comic['title']}}</h2>
    </div>

    <button>
        <a href="/">Indietro</a>
    </button>
@endsection