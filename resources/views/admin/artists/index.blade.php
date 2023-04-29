@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.artists.create') }}" class="btn btn-sm btn-success ms-2 me-2 w-auto">ایجاد آرتیست</a>
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
        </div>
        <div class="row justify-content-center">
            <table class="table table-dark table-striped table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام</th>
                    <th scope="col">بیوگرافی</th>
                    <th scope="col">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $artist->name }}</td>
                        <td>{{ $artist->bio }}</td>
                        <td>
                            <a href="{{ route('admin.artists.edit', $artist->id) }}"
                               class="btn btn-sm btn-primary">ویرایش</a>
                            <button
                               onclick="event.preventDefault(); document.querySelector('#artist-{{ $artist->id }}').submit()"
                               class="btn btn-sm btn-danger">حذف</button>
                            <form action="{{ route('admin.artists.destroy', $artist->id) }}" method="POST" class="d-none"
                                  id="artist-{{ $artist->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $artists->links() }}
    </div>
@endsection
