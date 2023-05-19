<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index($slug)
    {
        $song = Song::whereSlug($slug)->first();
        return view('song.index', compact('song'));
    }

    public function all()
    {
        $songs = Song::paginate(20);

        return view('song.all', compact('songs'));
    }
}
