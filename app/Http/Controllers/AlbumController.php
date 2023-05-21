<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index($slug)
    {
        $album = Album::whereSlug($slug)->first();

        return view('album.index', compact('album'));
    }

    public function all()
    {
        $albums = Album::paginate(20);

        return view('album.all', compact('albums'));
    }
}
