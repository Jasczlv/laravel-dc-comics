<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }


    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }


    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {

        $form_data = $request->all();

        // dd($form_data);

        // crea l'istanza, la popola con i dati e la salva nel db
        $new_comic = Comic::create($form_data);


        // $form_data = $request->all();

        // $new_comic = new Comic();

        // $new_comic->title = $form_data['title'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->type = $form_data['type'];
        // $new_comic->writers = $form_data['writers'];
        // $new_comic->artists = $form_data['artists'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->description = $form_data['description'];

        // $new_comic->save();

        return to_route('comics.show', $new_comic);
    }


    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }


    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();

        $comic->fill($form_data);
        $comic->save();
        // $comic->update($form_data);

        return to_route('comics.show', $comic);
    }


    public function destroy(Comic $comic)
    {

        $comic->delete();
        return to_route('comics.index');
    }
}
