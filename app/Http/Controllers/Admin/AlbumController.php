<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.albums.index', ['albums' => Album::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'artist_id' => ['required', 'string', 'exists:artists,id'],
            'genre_id' => ['required', 'string', 'exists:genres,id'],
            'release_date' => ['required', 'date_format:Y-m-d H:i'],
            'cover_image' => ['required', 'file', 'max:512'],
        ]);

        if ($request->hasFile('cover_image')) {
            $cover = $request->file('cover_image');
            $coverName = time() . '-' . mt_rand(11111, 99999) . '.' . $cover->getClientOriginalExtension();

            $path = 'covers/' . $coverName;
            Storage::disk('public')->put($path, file_get_contents($cover));

            $validatedData['cover_image'] = $coverName;
        }

        Album::create($validatedData);
        return redirect()->route('admin.albums.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.albums.edit', ['album' => Album::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = Album::findOrFail($id);

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'artist_id' => ['required', 'string', 'exists:artists,id'],
            'genre_id' => ['required', 'string', 'exists:genres,id'],
            'release_date' => ['required', 'date_format:Y-m-d H:i'],
            'cover_image' => ['file', 'max:512'],
        ]);

        if ($request->hasFile('cover_image')) {
            $cover = $request->file('cover_image');
            $coverName = time() . '-' . mt_rand(11111, 99999) . '.' . $cover->getClientOriginalExtension();

            $path = 'covers/' . $coverName;
            Storage::disk('public')->put($path, file_get_contents($cover));

            $validatedData['cover_image'] = $coverName;
        }

        $album->update($validatedData);

        return redirect()->route('admin.albums.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Album::destroy($id);
        return back();
    }
}
