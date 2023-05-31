@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <!-- first section -->
        @include('layouts.first')

        <!-- recent songs -->
        @include('layouts.songs')

        <!-- second section -->
        @include('layouts.second')

        <!-- recent albums -->
        @include('layouts.albums')

        <!-- third section -->
        @include('layouts.third')

        <!-- recent artists -->
        @include('layouts.artists')

        <!-- Footer -->
        @include('layouts.footer')
    </div>
@endsection
