@extends('layouts.app')
@section('content')

<main>
  <section>
    <div class="container">
      <p>comic.edit</p>
      <h2 class="fs-2">Modifica un fumetto</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.update',$comic) }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ $comic->title }}">
        </div>
        
        <div class="mb-3">
          <label for="series" class="form-label">Serie</label>
          <input type="text" name="series" class="form-control" id="series" placeholder="Titolo del fumetto" value="{{ $comic->series }}">
        </div>
        
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Titolo del fumetto" value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Url Image</label>
          <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="novel book" value="{{ $comic->type }}">
        </div>

        <div class="mb-3">
          <label for="writers" class="form-label">Scrittore</label>
          <input type="text" name="writers" class="form-control" id="writers" placeholder="Name" value="{{ $comic->writers }}">
        </div>
        
        <div class="mb-3">
          <label for="artists" class="form-label">Artista</label>
          <input type="text" name="artists" class="form-control" id="artists" placeholder="Name" value="{{ $comic->artists }}">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="$1.00" value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione del fumetto" >{{ $comic->description }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
      </form>
    </div>
  </section>
</main>