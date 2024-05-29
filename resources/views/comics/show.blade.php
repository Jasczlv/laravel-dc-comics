@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
  <section>
    <div class="container">
      <p>comics.show</p>
      <h1 class="fs-2">Fumetto: {{ $comic->title }}</h1>
    </div>
    <div class="container">
      <ul>
        <li>Nome: {{ $comic->title }}</li>
        <li>Descrizione: {{ $comic->description }}</li>
        <li>Prezzo: {{ $comic->price }}</li>
      </ul>
    </div>
    <div class="container">
      <div>
        {!! $comic->description !!}
      </div>
    </div>
  </section>
</main>
</body>
</html>