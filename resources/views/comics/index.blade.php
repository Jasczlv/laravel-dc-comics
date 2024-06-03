@extends('layouts.app')
@section('content')
    <section>
        <div>
            <h1>Home Page</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                        <th>Artists</th>
                        <th>Writers</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a>
                            </td>
                            <td><img src="{{ $comic->thumb }}" alt="immagine non trovata" class="small-img"></td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->artists }}</td>
                            <td>{{ $comic->writers }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('comics.edit', $comic) }}">Edit</a>
                                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-link link-danger">Trash</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </section>
