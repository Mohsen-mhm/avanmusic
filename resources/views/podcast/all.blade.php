@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <h2 class="text-center text-warning mb-4">همه پادکست ها ها</h2>

            @foreach($podcasts as $podcast)
                <div class="col d-flex flex-column justify-content-center align-items-center mb-4">
                    <div class="card bg-dark text-light" style="min-width: 15rem; max-width: 15rem;">
                        <a href="{{ route('podcast', $podcast) }}">
                            <img src="/storage/podcast-covers/{{ $podcast->cover }}" class="card-img-top"
                                 style="min-height: 15rem; max-height: 10rem" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('podcast', $podcast) }}" class="card-text text-decoration-none text-light"
                               style="font-size: 16px;">{{ $podcast->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $podcasts->links() }}
    </div>
@endsection

