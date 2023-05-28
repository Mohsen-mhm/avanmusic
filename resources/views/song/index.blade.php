@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <ul class="list-group p-2">
                        <li>{{ $error }}</li>
                    </ul>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col d-flex flex-column justify-content-center align-items-center mb-4">
                <h2 class="text-center text-warning mb-4">موزیک پلیر</h2>
                <audio id="audio-player" src=""></audio>
                <div
                    class="d-flex justify-content-center align-items-center border border-warning rounded rounded-circle bg-dark text-light m-0"
                    style="width: 180px; height: 180px;">
                    <img src="/storage/song-covers/{{ $song->cover }}" alt="song cover"
                         class="w-100 h-100 rounded rounded-circle">
                </div>
                <div class="text-center text-light mt-4 mb-4" id="track" data-src="/storage/musics/{{ $song->music }}">
                    <p class="h5">{{ $song->name }}</p>
                    <p class="text-muted h6">{{ $song->artist->name }}</p>
                    @auth
                        @php
                            $like = \App\Models\Like::where('user_id', \Illuminate\Support\Facades\Auth::id())
                                ->where('song_id', $song->id)
                                ->first();
                        @endphp
                        @if($like)
                            <a href="javascript:void(0)"
                               onclick="event.preventDefault(); document.querySelector('#dislike-form').submit();">
                                <i class="bi bi-heart-fill text-danger" style="font-size: 25px"></i>
                            </a>
                            <form action="{{ route('song.dislike', $song) }}" id="dislike-form" method="POST"
                                  class="d-none">
                                @csrf
                            </form>
                        @else
                            <a href="javascript:void(0)"
                               onclick="event.preventDefault(); document.querySelector('#like-form').submit();">
                                <i class="bi bi-heart text-danger" style="font-size: 25px"></i>
                            </a>
                            <form action="{{ route('song.like', $song) }}" id="like-form" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                    @else
                        <div class="btn-group">
                            <i class="bi bi-heart text-danger" style="font-size: 25px" type="button"
                               id="defaultDropdown"
                               data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"></i>
                            <div class="dropdown-menu bg-dark border-secondary" aria-labelledby="defaultDropdown"><a
                                    href="{{ route('login') }}" style="font-size: 13px;"
                                    class="dropdown-item text-light">برای لایک کردن وارد سایت شوید</a></div>
                        </div>
                    @endauth
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-dark border me-2 ms-2" id="play-pause-btn"><i class="bi bi-play"></i></a>
                </div>
                @auth
                    @php
                        $order = auth()->user()->orders()->where('status', 'paid')->first();
                    @endphp
                    @if($order && $order->songs->contains('id', $song->id))
                        <p class="text-success mt-4 mb-0">این موزیک توسط شما خریداری شده است.</p>
                        <a href="{{ route('orders.song.download', $song) }}"
                           class="btn btn-success mt-2">دانلود</a>
                    @else
                        <form action="{{ route('addToCart', $song) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-warning mt-3">خرید و دانلود ({{ $song->price }}
                                تومان)
                            </button>
                        </form>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-danger mt-3">برای خرید و دانلود وارد سایت شوید
                        ({{ $song->price }}
                        تومان)
                    </a>
                @endauth
                <hr class="w-100 text-light mt-5 mb-4"/>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h2 class="text-warning mb-5">متن موزیک</h2>
                    <p class="text-light text-center" style="font-size: 18px">

                        @foreach($song->stanzas->sortBy('stanza_number') as $stanza)
                            {{ $stanza->lyrics }}<br/><br/>
                        @endforeach

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
          integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script>
        const audioPlayer = document.querySelector("#audio-player");
        const playPauseBtn = document.querySelector("#play-pause-btn");
        const track = document.querySelector("#track");

        // Set initial track
        audioPlayer.src = track.getAttribute("data-src");

        // Add event listeners to buttons
        playPauseBtn.addEventListener("click", () => {
            if (audioPlayer.paused) {
                audioPlayer.play();
                playPauseBtn.innerHTML = '<i class="bi bi-pause"></i>';
            } else {
                audioPlayer.pause();
                playPauseBtn.innerHTML = '<i class="bi bi-play"></i>';
            }
        });

        // Update play/pause button when audio finishes playing
        audioPlayer.addEventListener("ended", () => {
            playPauseBtn.innerHTML = '<i class="bi bi-play"></i>';
        });
    </script>
@endsection
