<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index($slug)
    {
        $artist = Artist::whereSlug($slug)->first();
        return view('artist.index', compact('artist'));
    }
}
