@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="col d-flex flex-column justify-content-center align-items-center mb-4">
                <div class="w-100 d-flex justify-content-center align-items-center mb-3">
                    <img src="/storage/album-covers/{{ $album->cover_image }}" alt="کاور"
                         style="width: 200px; height: 200px; border-radius: 100%">
                </div>
                <h2 class="text-center text-warning mb-3">{{ $album->name }}</h2>
                <h6 class="text-center text-warning mb-4">{{ $album->artist->name }}</h6>

                <div class="w-100 d-flex justify-content-evenly align-items-center">
                    <small class="text-center text-light mb-4"><b>تاریخ
                            انتشار: </b>{{ \Illuminate\Support\Carbon::parse($album->release_date)->format('Y/m/d') }}
                    </small>
                    <small class="text-center text-light mb-4"><b>ژانر: </b>{{ $album->genre->name }}</small>
                </div>

                <hr class="w-100 text-light">

                <h2 class="text-center text-warning mb-3">موزیک ها</h2>
                @foreach($album->songs as $song)
                    <div class="col d-flex flex-column justify-content-center align-items-center mb-4">
                        <div class="card bg-dark text-light" style="min-width: 15rem; max-width: 15rem;">
                            <a href="{{ route('song', $song) }}">
                                <img src="/storage/song-covers/{{ $song->cover }}" class="card-img-top"
                                     style="min-height: 15rem; max-height: 10rem" alt="...">
                            </a>
                            <div class="card-body">
                                <a href="{{ route('song', $song) }}" class="card-text text-decoration-none text-light"
                                   style="font-size: 16px;">{{ $song->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
