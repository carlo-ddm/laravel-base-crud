@extends('layout.main')
@section('content')
<div class="container">
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @method('PUT')
        {{-- csrf: Obbligatorio su tutti i form di laravel--> è un token di laravel che verifica che le info provengano da un form del sito stesso --}}
        @csrf
        <div class="form-group">
          <label for="image">Image</label>
          <input type="text" class="form-control" name="image" id="image" value="{{$comic->image}}">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{$comic->title}}">
        </div>
        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control" name="type" id="type" value="{{$comic->type}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
