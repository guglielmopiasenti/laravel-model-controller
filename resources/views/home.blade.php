@extends('layouts.main')

@section('main')
<div class="container">

  <h1>The biggest movies repository </h1>
  <section id="movies">
    <div class="row row-cols-4">
      @forelse ($movies as $movie)
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$movie['original_title']}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie['vote']}}</h6>
          <p class="card-text">{{$movie['nationality']}}</p>
          <p class="card-text">{{$movie['date']}}</p>
        </div>
      </div>
      @empty
          <h3>Sorry, there are no movies</h3>
      @endforelse
    </div>
  </section>
</div>

@endsection