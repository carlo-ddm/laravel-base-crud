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
    <form action="{{route('comics.store')}}" method="POST">
        {{-- csrf: Obbligatorio su tutti i form di laravel--> è un token di laravel che verifica che le info provengano da un form del sito stesso --}}
        @csrf
        <div class="form-group">
          <label for="image">Image</label>
          <input type="text"
          class="form-control @error('image') is-invalid @enderror"
          name="image"
          id="image"
          placeholder="URL Immagine"
          value="{{old('image')}}">
          @error('image')
            <p class="error-msg">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text"
          class="form-control
           @error('title') is-invalid @enderror"
           name="title"
           id="title"
           placeholder="Titolo"
           value="{{old('title')}}"
          @error('title')>
            <p class="error-msg">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <input type="text"
          class="form-control
          @error('image') is-invalid @enderror"
          name="type"
          id="type"
          placeholder="Genere"
          value="{{old('type')}}">
          @error('type')
            <p class="error-msg">{{$message}}</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
