@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <!-- sliders -->
        @include('layouts.carousel')

        <!-- recent songs -->
        @include('layouts.songs')

        <!-- Footer -->
        @include('layouts.footer')
    </div>
@endsection
