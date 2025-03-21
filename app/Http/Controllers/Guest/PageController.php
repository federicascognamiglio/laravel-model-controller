<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Prelevo i dati dal database
        $movies = Movie::all();

        // Ritorno la view
        return view('home', compact('movies'));
    }
}
