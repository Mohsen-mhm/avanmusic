@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.songs.index') }}" class="btn btn-sm btn-secondary w-auto">بازگشت</a>
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

            <form action="{{ route('admin.songs.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="name" class="text-muted">نام:</label>
                        <input id="name" type="text"
                               class="border-secondary bg-dark text-light form-control @error('name') is-invalid @enderror mt-2"
                               name="name" value="{{ old('name') }}" required autocomplete="name"
                               autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="music" class="text-muted">موزیک:</label>
                        <input id="music" type="file" accept="audio/*" data-browse="Select music"
                               class="border-secondary bg-dark text-light form-control @error('music') is-invalid @enderror mt-2"
                               name="music" autocomplete="music"
                               autofocus required>
                        @error('music')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="cover" class="text-muted">کاور موزیک:</label>
                        <input id="cover" type="file" accept="image/*" data-browse="Select image"
                               class="border-secondary bg-dark text-light form-control @error('cover') is-invalid @enderror mt-2"
                               name="cover" autocomplete="cover"
                               required autofocus>
                        @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6 mb-3">
                        <label for="single" class="text-muted">سینگل ترک:</label>
                        <input type="checkbox" id="single" name="single" value="1"
                               class="border-secondary bg-dark text-light form-check-input @error('single') is-invalid @enderror">
                        @error('single')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="artist_id" class="text-muted">آرتیست:</label>
                        <select id="artist_id" name="artist_id"
                                class="border-secondary bg-dark text-light form-select @error('artist_id') is-invalid @enderror mt-2"
                                required autocomplete="artist_id"
                                autofocus>
                            <option value="0">یک آرتیست انتخاب کنید</option>
                            @foreach (\App\Models\Artist::all() as $artist)
                                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                            @endforeach
                        </select>
                        @error('artist_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3" id="album-select">
                        <label for="album_id" class="text-muted">آلبوم:</label>
                        <select id="album_id" name="album_id"
                                class="border-secondary bg-dark text-light form-select @error('album_id') is-invalid @enderror mt-2"
                                autocomplete="album_id"
                                autofocus>
                            <option value="0">یک آلبوم انتخاب کنید</option>
                            @foreach (\App\Models\Album::all() as $album)
                                <option value="{{ $album->id }}">{{ $album->name }}</option>
                            @endforeach
                        </select>
                        @error('album_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ایجاد موزیک</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
            integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {
            $('#single').change(function () {
                if ($(this).is(':checked')) {
                    $('#album-select').slideUp();
                } else {
                    $('#album-select').slideDown();
                }
            });
        });
    </script>
@endsection
