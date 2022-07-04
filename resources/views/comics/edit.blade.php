@extends('layout.main')
@section('content')
<div class="container">
    {{-- gestione errori --}}
    <div>
        @if ($errors->any())
            {{-- @dump($errors->any()) --}}
            <div class="col-8 offset-2 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @method('PUT')
        {{-- csrf: Obbligatorio su tutti i form di laravel--> è un token di laravel che verifica che le info provengano da un form del sito stesso --}}
        @csrf
        <div class="form-group">
          <label for="image">Image</label>
          <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
          placeholder="URL Immagine" value="{{old('image',$comic->image)}}">
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="URL Immagine" value="{{old('title',$comic->title)}}">
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
          placeholder="URL Immagine" value="{{old('type',$comic->type)}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
