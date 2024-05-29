@extends('layouts.app')
@section('content')

<main>
  <section>
    <div class="container">
      <p>comic.create</p>
      <h2 class="fs-2">Crea una fumetto</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.store') }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="email" name="title" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Url Image</label>
          <input type="email" name="thumb" class="form-control" id="image" placeholder="http://...">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="email" name="type" class="form-control" id="type" placeholder="novel book">
        </div>

        <div class="mb-3">
          <label for="cooking_time" class="form-label">Scrittore</label>
          <input type="email" name="writers" class="form-control" id="cooking_time" placeholder="Name">
        </div>

        <div class="mb-3">
          <label for="weigth" class="form-label">Prezzo</label>
          <input type="email" name="weigth" class="form-control" id="weigth" placeholder="$1.00">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione del fumetto"></textarea>
        </div>

        <button class="btn btn-primary">Crea</button>
      </form>
    </div>
  </section>
</main>