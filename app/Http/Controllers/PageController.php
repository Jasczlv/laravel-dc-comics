<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    public function show($id)
    {

        return ('show');
    }
    public function create()
    {
        return ('create');
    }
    public function store()
    {
        return ('store');
    }
}
