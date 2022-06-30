@extends('layout.main')

@section('content')
    <div class="container">
            <img src="{{$comic->image}}" alt="{{$comic->title}}">
            <h1>{{$comic->title}}</h1>
            <h2>{{$comic->type}}</h2>
    </div>
@endsection
