<?php

namespace App\Http\Controllers;

use App\Models\Comic;

class ComicController extends Controller
{

    public function index()
    {

        //ddd(Comic::all());

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }
}
