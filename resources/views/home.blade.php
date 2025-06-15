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
{{-- ▶ STATISTICS SECTION (framed circles) --}}
<section class="w-full flex flex-col items-center py-12 bg-neutral-100" aria-labelledby="festival-stats-title">
  <h2 id="festival-stats-title" class="mx-4 sm:mx-10 text-center mb-10 text-4xl md:text-5xl lg:text-5xl font-bold text-[#346750]">
    CINEBRASIL – Das brasilianische Filmfestival in Deutschland!
  </h2>
  <div id="archive-grid" class="w-full max-w-[1440px] px-6 md:px-10 lg:px-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
    <article class="flex flex-col items-center" role="listitem">
      <div class="flex flex-col justify-center items-center p-4 sm:p-5 text-center rounded-full border-4 border-[#346750] h-[180px] w-[180px] sm:h-[200px] sm:w-[200px]">
        <p class="text-base sm:text-lg font-semibold text-[#346750]">MEHR ALS</p>
        <p class="text-3xl sm:text-5xl font-bold leading-none text-[#346750]">55.000</p>
        <p class="text-base sm:text-lg font-semibold text-[#346750]">BESUCHER*INNEN SEIT 2005</p>
      </div>
    </article>

    <article class="flex flex-col items-center" role="listitem">
      <div class="flex flex-col justify-center items-center p-4 sm:p-5 text-center rounded-full border-4 border-[#346750] h-[180px] w-[180px] sm:h-[200px] sm:w-[200px]">
        <p class="mb-1 sm:mb-2 text-3xl sm:text-5xl font-bold leading-none text-[#346750]">197</p>
        <p class="text-base sm:text-lg font-semibold text-[#346750]">FILME INSGESAMT VORGEFÜHRT</p>
      </div>
    </article>
    <article class="flex flex-col items-center" role="listitem">
      <div class="flex flex-col justify-center items-center p-4 sm:p-5 text-center rounded-full border-4 border-[#346750] h-[180px] w-[180px] sm:h-[200px] sm:w-[200px]">
        <p class="mb-1 sm:mb-2 text-3xl sm:text-5xl font-bold leading-none text-[#346750]">20</p>
        <p class="text-sm sm:text-base font-semibold text-[#346750]">STÄDTE IN DEUTSCHLAND, ÖSTERREICH UND DER SCHWEIZ</p>
      </div>
    </article>
    <article class="flex flex-col items-center" role="listitem">
      <div class="flex flex-col justify-center items-center p-4 sm:p-5 text-center rounded-full border-4 border-[#346750] h-[180px] w-[180px] sm:h-[200px] sm:w-[200px]">
        <p class="mb-1 sm:mb-2 text-3xl sm:text-5xl font-bold leading-none text-[#346750]">20</p>
        <p class="text-sm sm:text-base font-semibold text-[#346750]">JAHRE BRASILIANISCHE FILMKUNST IN EUROPA</p>
      </div>
    </article>
  </div>
</section>


<!-- ARCHIVE SECTION -->
  @php
  $archiveItems = [
      ['src' => '/assets/2005_FESTIVAL copy 2.png', 'alt' => 'Poster 2005'],
      ['src' => '/assets/2006_FESTIVAL copy 2.png', 'alt' => 'Poster 2006'],
      ['src' => '/assets/2007_FESTIVAL_SEUJORGE.png', 'alt' => 'Poster 2007'],
      ['src' => '/assets/2008_FESTIVAL copy 2.png', 'alt' => 'Poster 2008'],
      // Add more items as needed
  ];
  @endphp
  <!-- ARCHIVE SECTION -->
  <section class="max-w-full mx-auto bg-cineBlue">
    {{-- Title --}}
    <div class="text-center py-12"> 
      <h2 class="text-3xl font-bold text-[#FFD900] mb-3 text-4xl md:text-5xl lg:text-6xl text-shadow-lg" id="archive-title">
        ARCHIV</h2>
    </div>
      
    <div class="max-w-[1440px] mx-auto grid
         grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4
         gap-6 px-6 sm:px-10 md:px-20 justify-items-center">
      @foreach($archiveItems as $item)
        <article class="w-full">
          <img
            src="{{ $item['src'] }}"
            alt="{{ $item['alt'] }}"
            class="w-full h-full rounded-lg shadow-md"
          />
          <!-- optional: a caption below -->
          <p class="mt-2 text-center text-sm text-gray-600">{{ $item['alt'] }}</p>
        </article>
      @endforeach
    </div>
    <div class="flex justify-center py-12"></div>
  </section>
    {{-- Link to the archive page --}}
    <a href="{{ route('archive') }}" 
       class="px-6 md:px-8 md:py-4 rounded-md flex items-center justify-center bg-[#FFF200] hover:bg-[#FFD900] transition-colors text-[#1D3470] md:text-lg font-extrabold shadow-lg"
       aria-label="Zum Archiv">
      ZUM ARCHIV
    </a>
    </div>
  </section>
  {{-- ▶ FOOTER (include partial) --}}
  @include('partials.footer')