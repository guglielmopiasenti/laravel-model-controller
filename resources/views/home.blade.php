@extends('layouts.main')

@section('main')
  <h1 class="text-center mb-4">The biggest movies repository</h1>
  <section id="movies">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      @forelse ($movies as $movie)
      <div class="col">
        <div class="card h-100 movie-card">
          <div class="card-body">
            <h5 class="card-title">{{$movie['original_title']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie['vote']}}</h6>
            <p class="card-text">{{$movie['nationality']}}</p>
            <p class="card-text">{{$movie['date']}}</p>
          </div>
        </div>
      </div>
      @empty
        <div class="col">
          <h3 class="text-center">Sorry, there are no movies</h3>
        </div>
      @endforelse
    </div>
  </section>
@endsection