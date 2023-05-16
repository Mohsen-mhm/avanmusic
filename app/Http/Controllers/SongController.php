<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index($slug)
    {
        dd($slug);
    }
}
