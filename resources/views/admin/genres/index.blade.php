@extends('layouts.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.genres.create') }}" class="btn btn-sm btn-success ms-2 me-2 w-auto">ایجاد ژانر</a>
            <a href="{{ route('admin.home') }}" class="btn btn-sm btn-secondary ms-2 me-2 w-auto">بازگشت</a>
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
                @foreach($genres as $genre)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $genre->name }}</td>
                        <td>
                            <a href="{{ route('admin.genres.edit', $genre->id) }}"
                               class="btn btn-sm btn-primary">ویرایش</a>
                            <button
                                onclick="event.preventDefault(); document.querySelector('#genre-{{ $genre->id }}').submit()"
                                class="btn btn-sm btn-danger">حذف
                            </button>
                            <form action="{{ route('admin.genres.destroy', $genre->id) }}" method="POST" class="d-none"
                                  id="genre-{{ $genre->id }}">
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
            {{ $genres->links() }}
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .pagination {
            background-color: #2c2f33;
        }

        /* Set the text color for the paginator */
        .pagination a, .pagination span {
            color: #fff;
        }
    </style>
@endsection
