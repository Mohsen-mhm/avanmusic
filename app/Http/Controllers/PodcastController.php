<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index($slug)
    {
        $podcast = Podcast::whereSlug($slug)->first();
        return view('podcast.index', compact('podcast'));
    }

    public function all()
    {
        $podcasts = Podcast::paginate(20);

        return view('podcast.all', compact('podcasts'));
    }
}
