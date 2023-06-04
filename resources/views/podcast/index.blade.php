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
                <h2 class="text-center text-warning mb-4">پادکست پلیر</h2>
                <audio id="audio-player" src=""></audio>
                <div
                    class="d-flex justify-content-center align-items-center border border-warning rounded rounded-circle bg-dark text-light m-0"
                    style="width: 180px; height: 180px;">
                    <img src="/storage/podcast-covers/{{ $podcast->cover }}" alt="podcast cover"
                         class="w-100 h-100 rounded rounded-circle">
                </div>
                <div class="text-center text-light mt-4 mb-4" id="track" data-src="/storage/podcasts/{{ $podcast->podcast }}">
                    <p class="h5">{{ $podcast->name }}</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-dark border me-2 ms-2" id="play-pause-btn"><i class="bi bi-play"></i></a>
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
