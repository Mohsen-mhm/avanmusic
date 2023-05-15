@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <!-- sliders -->
        @include('layouts.carousel')

        <!-- recent songs -->
        @include('layouts.songs')

        <!-- recent albums -->
        @include('layouts.albums')

        <!-- Footer -->
        @include('layouts.footer')
    </div>
@endsection
