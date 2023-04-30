@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.songs.create') }}" class="btn btn-sm btn-success ms-2 me-2 w-auto">ایجاد آهنگ</a>
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">سینگل ترک</th>
                    <th scope="col">آرتیست</th>
                    <th scope="col">آلبوم</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($songs as $song)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $song->name }}</td>
                        <td>
                            @if($song->single)
                                <small class="text-success">بله</small>
                            @else
                                <small class="text-danger">خیر</small>
                            @endif
                        </td>
                        <td><small>{{ $song->artist->name }}</small></td>
                        <td><small>{{ $song->album->name }}</small></td>
                        <td>
                            <a href="{{ route('admin.songs.edit', $song->id) }}"
                               class="btn btn-sm btn-primary">ویرایش</a>
                            <button
                               onclick="event.preventDefault(); document.querySelector('#song-{{ $song->id }}').submit()"
                               class="btn btn-sm btn-danger">حذف</button>
                            <form action="{{ route('admin.songs.destroy', $song->id) }}" method="POST" class="d-none"
                                  id="song-{{ $song->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $songs->links() }}
    </div>
@endsection
