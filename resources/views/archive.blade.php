@extends('layouts.app')

@section('content')
<livewire:header />
@section('content')
    <section class="archive-page">
        <div class="container">
            <h1 class="page-title">CineBrasil Archive</h1>
            <p class="intro-text">
                Celebrating 20 years of CineBrasil, explore the festival's journey from its inception in 2005 to the present day.
            </p>

            @foreach ($years as $year)
                <div class="archive-year">
                    <h2>{{ $year }}</h2>
                    <div class="archive-content">
                        @if (file_exists(public_path("archive/{$year}/poster.jpg")))
                            <img src="{{ asset("archive/{$year}/poster.jpg") }}" alt="Poster {{ $year }}">
                        @else
                            <p>Poster coming soon.</p>
                        @endif

                        @if (file_exists(public_path("archive/{$year}/program.pdf")))
                            <a href="{{ asset("archive/{$year}/program.pdf") }}" target="_blank">Download Program</a>
                        @else
                            <p>Program details coming soon.</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection