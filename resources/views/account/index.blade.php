@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
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

        </div>
    </div>
@endsection
