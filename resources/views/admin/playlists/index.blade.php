@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.playlists.create') }}" class="btn btn-sm btn-success ms-2 me-2 w-auto">ایجاد پلی لیست</a>
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">کاربر</th>
                    <th scope="col">تعداد موزیک</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($playlists as $playlist)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $playlist->name }}</td>
                        <td><small>{{ $playlist->user->name }}</small></td>
                        <td>{{ $playlist->songs->count() }}</td>
                        <td>
                            <a href="{{ route('admin.playlists.edit', $playlist->id) }}"
                               class="btn btn-sm btn-primary">ویرایش</a>
                            <button
                               onclick="event.preventDefault(); document.querySelector('#playlist-{{ $playlist->id }}').submit()"
                               class="btn btn-sm btn-danger">حذف</button>
                            <form action="{{ route('admin.playlists.destroy', $playlist->id) }}" method="POST" class="d-none"
                                  id="playlist-{{ $playlist->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $playlists->links() }}
    </div>
@endsection
