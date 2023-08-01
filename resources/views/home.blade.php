@extends('layouts.app')

@section('content')
    <div class="container" dir="rtl">
        <!-- first section -->
        @include('layouts.hero')

        <!-- recent songs -->
        @include('layouts.songs')

        <!-- second section -->
        @include('layouts.experience')

        <!-- recent podcasts -->
        @include('layouts.podcasts')

        <!-- third section -->
        @include('layouts.statistics')

        <!-- recent albums -->
        @include('layouts.albums')

        <!-- fourth section -->
        @include('layouts.newsletter')

        <!-- recent artists -->
        @include('layouts.artists')

        <!-- Footer -->
        @include('layouts.footer')
    </div>
@endsection
