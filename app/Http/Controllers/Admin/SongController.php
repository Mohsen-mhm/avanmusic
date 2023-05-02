<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Models\Stanza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.songs.index', ['songs' => Song::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'single' => ['boolean', 'in:0,1'],
            'artist_id' => ['required', 'string', 'exists:artists,id'],
            'album_id' => ['string'],
            'music' => ['required', 'file'],
        ]);

        if (isset($validatedData['single'])) {
            $validatedData['album_id'] = null;
        } else {
            $validatedData['single'] = "0";
        }

        if ($request->hasFile('music')) {
            $music = $request->file('music');
            $musicName = time() . '-' . mt_rand(11111, 99999) . '.' . $music->getClientOriginalExtension();

            $path = 'musics/' . $musicName;
            Storage::disk('public')->put($path, file_get_contents($music));

            $validatedData['music'] = $musicName;
        }

        Song::create($validatedData);

        return redirect()->route('admin.songs.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.songs.edit', ['song' => Song::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Song::findOrFail($id);

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'single' => ['boolean', 'in:0,1'],
            'artist_id' => ['required', 'string', 'exists:artists,id'],
            'album_id' => ['string'],
            'music' => ['file'],
        ]);

        if (isset($validatedData['single'])) {
            $validatedData['album_id'] = null;
        } else {
            $validatedData['single'] = "0";
        }

        if ($request->hasFile('music')) {
            $music = $request->file('music');
            $musicName = time() . '-' . mt_rand(11111, 99999) . '.' . $music->getClientOriginalExtension();

            $path = 'musics/' . $musicName;
            Storage::disk('public')->put($path, file_get_contents($music));

            $validatedData['music'] = $musicName;
        }

        $song->update($validatedData);

        return redirect()->route('admin.songs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Song::destroy($id);
        return back();
    }

    public function addStanza(Request $request, $songId)
    {
        $validatedData = $request->validate([
            'stanza_number' => ['required', 'integer', 'unique:stanzas,stanza_number,NULL,id,song_id,' . $songId],
            'lyrics' => ['required', 'string', 'max:255'],
        ]);
        $validatedData['song_id'] = $songId;

        Stanza::create($validatedData);
        return back();
    }

    public function removeStanza($stanzaId)
    {
        Stanza::destroy($stanzaId);

        return back();
    }
}
