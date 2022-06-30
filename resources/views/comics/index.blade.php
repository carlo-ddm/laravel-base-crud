@extends('layout.main')
@section('content')
<div class="container">
    <table class="table">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Immagine</th>
            <th scope="col">Genere</th>
            <th scope="col">Scopri</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->image}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a class="btn-primary" href="">SHOW</a>
                    <a class="btn-success" href="">EDIT</a>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>

</div>
@endsection
