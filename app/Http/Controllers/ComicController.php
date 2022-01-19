<?php

use App\Models\Comic;

namespace App\Http\Controllers;

class ComicController extends Controller
{

    public function index()
    {

        ddd(Comic::all());

        /* $comics = Comic::all(); */

        return view('comics.index', compact('comics'));
    }
}
