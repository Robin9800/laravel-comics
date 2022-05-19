@extends('layout.app')

@section('content')
    
    <div class="jumbotron"></div>
      
        @if(count($comics) > 0)
            @foreach ($comics as $item)
                <div class="card">
                    <a href="detail/">
                        <img src="{{$item['thumb']}}" alt="card">
                        <h2>{{$item['series']}}</h2>
                    </a>
                   
                </div>
            @endforeach
        @endif
@endsection