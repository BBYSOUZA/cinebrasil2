{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@livewireStyles
@section('content')
  {{-- 1) Re‐include the header (Livewire component) --}}
  <livewire:header />

  {{-- ▶ HERO (include partial) --}}
  @php
    // Example: These variables would normally come from a controller or config.
    $heroVideoUrl     = 'https://www.youtube.com/embed/56P0KCQnRhE?si=nOvoU6HdUmXfeSeQ';
    $heroTitle        = 'O Palhaço (2011) Trailer';
    $heroSubtitle     = '— DEMNÄCHST IM APRIL —';
    $heroMainTitle    = 'O Palhaço (2011)<br /><span class="text-xl md:text-2xl font-semibold">— “Der Clown”</span>';
    $heroDirector     = 'Regie: Selton Mello';
    $heroMetaCountry  = 'Brasilien, 2011, 90 Min., OmU';
    $heroDescription  = 'Auf der Bühne Lachen und Applaus. Hinter den Kulissen Zweifel und Unsicherheit. Der Clown…';
    $heroDateTime     = '17.04. um 19:00';
    $heroVenue        = 'Babylon Mitte';
    $heroVenueAddress = '(Rosa-Luxemburg-Straße 10178 Berlin)';
    $heroTicketsUrl   = 'https://babylonberlin.eu/film/8434-cinebrasil-o-palha-o';
  @endphp

  @include('partials.hero', compact(
    'heroVideoUrl',
    'heroTitle',
    'heroSubtitle',
    'heroMainTitle',
    'heroDirector',
    'heroMetaCountry',
    'heroDescription',
    'heroDateTime',
    'heroVenue',
    'heroVenueAddress',
    'heroTicketsUrl'
  ))

  {{-- ▶ OTHER SECTIONS (Statistics, Förderung, Archiv, etc.) --}}
  {{-- … your existing code for stats/foerderung/archiv goes here … --}}
@endsection
