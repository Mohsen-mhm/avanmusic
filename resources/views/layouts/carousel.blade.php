<section class="container pt-0">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $likedSongs = \App\Models\Like::select('song_id', \Illuminate\Support\Facades\DB::raw('COUNT(*) as like_count'))
                    ->groupBy('song_id')
                    ->orderByDesc('like_count')
                    ->limit(5)
                    ->get();
            @endphp
            @foreach($likedSongs as $likedSong)
                @php
                    $song = \App\Models\Song::find($likedSong->song_id);
                @endphp
                <div class="carousel-item @if($loop->first) active @endif">
                    <a href="{{ route('song', $song) }}">
                        <img src="/storage/song-covers/{{ $song->cover }}"
                             class="col d-block img-fluid ax w-100 opacity-100" alt="...">
                    </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
