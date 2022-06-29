@extends('layout.app')

@section('title')
    MyMovies | Homepage
@endsection

@section('movies')
<main>
  <div class="cards-container">
    @foreach ($movies as $movie)
    <div class="card">
      <div class="info-container">
        <div class="row">
          <h2>Titolo:</h2>
          <h3 class="text">{{ $movie->title }}</h3>
        </div>
        <div class="row">
          <h2>Titolo originale:</h2>
          <h3 class="text">
            {{ $movie->original_title }}
          </h3>
        </div>
        <div class="row">
          <h2>Origine:</h2>
          <h3 class="text">
            {{ $movie->nationality }}
          </h3>
        </div>
        <div class="row">
          <h2>Data Di Uscita:</h2>
          <h3 class="text">
            {{ $movie->date }}
          </h3>
        </div>
        <div class="row">
          <h2>Voto:</h2>
          <h3 class="text">
            {{ $movie->vote }}
          </h3>
        </div>       
      </div>
    </div>
    @endforeach
  </div>
</main>

@endsection