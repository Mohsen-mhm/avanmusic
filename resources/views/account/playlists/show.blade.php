@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('playlists.index') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">پخش</th>
                </tr>
                </thead>
                <tbody>
                <audio id="audio-player" src=""></audio>
                @foreach($playlist->songs as $song)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="{{ route('song', $song) }}">{{ $song->name }}</a></td>
                        <td>
                            <a class="btn btn-sm btn-dark border play-pause-btn" data-src="/storage/musics/{{ $song->music }}">
                                <i class="bi bi-play"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
        const playPauseBtns = document.querySelectorAll(".play-pause-btn");

        playPauseBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                const src = btn.getAttribute("data-src");
                const isPlaying = btn.classList.contains("playing");

                if (isPlaying) {
                    btn.innerHTML = '<i class="bi bi-play"></i>';
                    audioPlayer.pause();
                    btn.classList.remove("playing");
                } else {
                    btn.innerHTML = '<i class="bi bi-pause"></i>';
                    audioPlayer.src = src;
                    audioPlayer.play();
                    btn.classList.add("playing");
                }
            });
        });

        // Update play/pause button when audio finishes playing
        audioPlayer.addEventListener("ended", () => {
            playPauseBtns.forEach((btn) => {
                btn.classList.remove("playing");
            });
        });
    </script>
@endsection
