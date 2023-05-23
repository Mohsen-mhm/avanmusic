<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like($slug)
    {
        $song = Song::whereSlug($slug)->first();

        Like::create(['user_id' => Auth::id(), 'song_id' => $song->id]);

        return back();
    }

    public function dislike($slug)
    {
        $song = Song::whereSlug($slug)->first();

        $like = Like::where([
            'user_id' => Auth::id(),
            'song_id' => $song->id
        ])->first();

        Like::destroy($like->id);

        return back();
    }
}
