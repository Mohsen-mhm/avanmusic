@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('playlists.index') }}" class="btn btn-sm btn-secondary w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <ul class="list-group p-2">
                            <li>{{ $error }}</li>
                        </ul>
                    </div>
                @endforeach
            @endif

            <form action="{{ route('playlists.update', $playlist->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="name" class="text-muted">نام:</label>
                        <input id="name" type="text"
                               class="border-secondary bg-dark text-light form-control @error('name') is-invalid @enderror mt-2"
                               name="name" value="{{ old('name', $playlist->name) }}" required autocomplete="name"
                               autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ویرایش پلی لیست</button>
            </form>
        </div>

        <div class="w-100 d-flex justify-content-center">
            <hr class="text-warning w-75 my-5">
        </div>
        <div class="w-100 d-flex justify-content-center">
            <h4 class="text-light">کل موزیک ها</h4>
        </div>

        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $playlistId = $playlist->id;
                    $notInPlaylistCount = \App\Models\Song::whereNotIn('id', function ($query) use ($playlistId) {
                        $query->select('song_id')
                        ->from('playlist_song')
                        ->where('playlist_id', '=', $playlistId);
                    })->count();
                @endphp
                @if($notInPlaylistCount)
                    @foreach($songs as $song)
                        @php
                            $isAvailableInPlaylist = \App\Models\Playlist::where('id', $playlist->id)->whereHas('songs', function ($query) use ($song) {
                                $query->where('songs.id', $song->id);
                            })->exists();
                        @endphp
                        @if(! $isAvailableInPlaylist)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="{{ route('song', $song) }}">{{ $song->name }}</a></td>
                                <td>
                                    <button
                                        onclick="event.preventDefault(); document.querySelector('#song-{{ $song->id }}').submit()"
                                        class="btn btn-sm btn-success">اضافه کردن
                                    </button>
                                    <form
                                        action="{{ route('playlists.add', ['playlist' => $playlist->id, 'song' => $song->id]) }}"
                                        method="POST" class="d-none"
                                        id="song-{{ $song->id }}">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">
                            <div class="border border-warning text-warning p-3">همه موزیک ها اضافه شدند</div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center align-items-center" dir="ltr">
            {{ $songs->links() }}
        </div>

        <div class="w-100 d-flex justify-content-center">
            <hr class="text-warning w-75 my-5">
        </div>
        <div class="w-100 d-flex justify-content-center">
            <h4 class="text-light">موزیک های پلی لیست</h4>
        </div>

        <div class="row justify-content-center">
            <table data-empty="No data available" class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @if($playlist->songs->count())
                    @foreach($playlist->songs as $song)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="{{ route('song', $song) }}">{{ $song->name }}</a></td>
                            <td>
                                <button
                                    onclick="event.preventDefault(); document.querySelector('#song-{{ $song->id }}').submit()"
                                    class="btn btn-sm btn-danger">حذف کردن
                                </button>
                                <form
                                    action="{{ route('playlists.remove', ['playlist' => $playlist->id, 'song' => $song->id]) }}"
                                    method="POST" class="d-none"
                                    id="song-{{ $song->id }}">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">
                            <div class="border border-warning text-warning p-3">موزیکی وجود ندارد</div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
