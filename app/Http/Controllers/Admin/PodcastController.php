<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.podcasts.index', ['podcasts' => Podcast::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.podcasts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'artist_id' => ['required', 'string', 'exists:artists,id'],
            'podcast' => ['required', 'file'],
            'cover' => ['required', 'file', 'max:512'],
        ]);

        if ($request->hasFile('podcast')) {
            $podcast = $request->file('podcast');
            $podcastName = time() . '-' . mt_rand(11111, 99999) . '.' . $podcast->getClientOriginalExtension();

            $path = 'podcasts/' . $podcastName;
            Storage::disk('public')->put($path, file_get_contents($podcast));

            $validatedData['podcast'] = $podcastName;
        }

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverName = time() . '-' . mt_rand(11111, 99999) . '.' . $cover->getClientOriginalExtension();

            $path = 'podcast-covers/' . $coverName;
            Storage::disk('public')->put($path, file_get_contents($cover));

            $validatedData['cover'] = $coverName;
        }

        Podcast::create($validatedData);

        return redirect()->route('admin.podcasts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.podcasts.edit', ['podcast' => Podcast::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'artist_id' => ['required', 'string', 'exists:artists,id'],
            'podcast' => ['file'],
            'cover' => ['file', 'max:512'],
        ]);

        $podcast = Podcast::findOrFail($id);

        if ($request->hasFile('podcast')) {
            $podcast = $request->file('podcast');
            $podcastName = time() . '-' . mt_rand(11111, 99999) . '.' . $podcast->getClientOriginalExtension();

            $path = 'podcasts/' . $podcastName;
            Storage::disk('public')->put($path, file_get_contents($podcast));

            $validatedData['podcast'] = $podcastName;
        }

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverName = time() . '-' . mt_rand(11111, 99999) . '.' . $cover->getClientOriginalExtension();

            $path = 'podcast-covers/' . $coverName;
            Storage::disk('public')->put($path, file_get_contents($cover));

            $validatedData['cover'] = $coverName;
        }

        $podcast->update($validatedData);

        return redirect()->route('admin.podcasts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Podcast::destroy($id);
        return redirect()->route('admin.podcasts.index');
    }
}
