@extends('layouts.app')

@section('title', 'CineBrasil – Home')

@section('content')
    @include('partials.hero', [
        'videoUrl' => $videoUrl,
        'title' => $title,
        'synopsis' => $synopsis,
        'showtime' => $showtime,
        'venue' => $venue,
        'ticketsUrl' => $ticketsUrl
    ])
@endsection