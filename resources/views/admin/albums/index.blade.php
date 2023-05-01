@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.albums.create') }}" class="btn btn-sm btn-success ms-2 me-2 w-auto">ایجاد آلبوم</a>
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">آرتیست</th>
                    <th scope="col">ژانر</th>
                    <th scope="col">تاریخ انتشار</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($albums as $album)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $album->name }}</td>
                        <td><small>{{ $album->artist->name }}</small></td>
                        <td><small>{{ $album->genre->name }}</small></td>
                        <td><small>{{ $album->release_date }}</small></td>
                        <td>
                            <a href="{{ route('admin.albums.edit', $album->id) }}"
                               class="btn btn-sm btn-primary">ویرایش</a>
                            <button
                                onclick="event.preventDefault(); document.querySelector('#album-{{ $album->id }}').submit()"
                                class="btn btn-sm btn-danger">حذف
                            </button>
                            <form action="{{ route('admin.albums.destroy', $album->id) }}" method="POST" class="d-none"
                                  id="album-{{ $album->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center align-items-center" dir="ltr">
            {{ $albums->links() }}
        </div>
    </div>
@endsection
