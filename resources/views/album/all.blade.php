@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <h2 class="text-center text-warning mb-4">همه موزیک ها</h2>

            @foreach($albums as $album)
                <div class="col d-flex flex-column justify-content-center align-items-center mb-4">
                    <div class="card bg-dark text-light" style="min-width: 15rem; max-width: 15rem;">
                        <a href="{{ route('album', $album) }}">
                            <img src="/storage/album-covers/{{ $album->cover_image }}" class="card-img-top"
                                 style="min-height: 15rem; max-height: 10rem" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('album', $album) }}" class="card-text text-decoration-none text-light"
                               style="font-size: 16px;">{{ $album->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $albums->links() }}
    </div>
@endsection

