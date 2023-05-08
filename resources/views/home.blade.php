@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <!-- sliders -->
        @include('layouts.carousel')

        @include('layouts.songs')

        <!-- Footer -->
        @include('layouts.footer')
    </div>
@endsection
