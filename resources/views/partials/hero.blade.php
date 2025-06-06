{{-- resources/views/partials/hero.blade.php --}}
<section class="bg-gradient-to-b from-blue-950 to-blue-900 py-12 px-6 md:px-16 lg:px-20">
  <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row gap-8 lg:gap-12 items-center">

    {{-- ▶ Video Embed Column --}}
    <div class="w-full md:w-1/2 order-1">
      <div class="relative w-full pb-[56.25%] rounded-lg overflow-hidden shadow-lg">
        <iframe
          class="absolute inset-0 w-full h-full"
          src="{{ $heroVideoUrl ?? 'https://www.youtube.com/embed/defaultVideoID' }}"
          title="{{ $heroTitle ?? 'Festival Trailer' }}"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen>
        </iframe>
      </div>
    </div>

    {{-- ▶ Film Details Column --}}
    <div class="w-full md:w-1/2 order-2 flex flex-col justify-center space-y-4">
      {{-- Headline (e.g. “DEMNÄCHST IM APRIL”) --}}
      <h2 class="text-white text-sm md:text-base uppercase tracking-wider text-center md:text-left">
        {{ $heroSubtitle ?? '— DEMNÄCHST IM APRIL —' }}
      </h2>

      {{-- Title (e.g. “O Palhaço (2011) — ‘Der Clown’”) --}}
      <h1 class="text-white text-3xl md:text-5xl lg:text-6xl font-bold leading-tight text-center md:text-left">
        {!! $heroMainTitle 
          ?? 'O Palhaço (2011)<br /><span class="text-xl md:text-2xl font-semibold">— &ldquo;Der Clown&rdquo;</span>' !!}
      </h1>

      {{-- Metadata (director, country, length) --}}
      <p class="text-white font-semibold text-lg md:text-xl text-center md:text-left">
        {{ $heroDirector ?? 'Regie: Selton Mello' }}
      </p>
      <p class="text-white font-semibold text-lg md:text-xl text-center md:text-left">
        {{ $heroMetaCountry ?? 'Brasilien, 2011, 90 Min., OmU' }}
      </p>

      {{-- Description --}}
      <p class="text-gray-300 text-sm md:text-base text-center md:text-left">
        {{ $heroDescription 
          ?? 'Auf der Bühne Lachen und Applaus. Hinter den Kulissen Zweifel und Unsicherheit…' }}
      </p>

      {{-- Date / Location --}}
      <div class="text-center md:text-left">
        <p class="text-white font-bold text-lg md:text-xl">
          {{ $heroDateTime ?? '17.04. um 19:00' }}
        </p>
        <p class="text-white font-bold text-base md:text-lg">
          {{ $heroVenue ?? 'Babylon Mitte' }}
        </p>
        <p class="text-white text-sm md:text-base">
          {{ $heroVenueAddress ?? '(Rosa-Luxemburg-Straße 10178 Berlin)' }}
        </p>
      </div>

      {{-- ▶ Tickets Button --}}
      <div class="flex justify-center md:justify-end">
        <a
          href="{{ $heroTicketsUrl ?? '#' }}"
          class="bg-[#FFF200] text-[#1D3470] flex items-center justify-center rounded-md
                 px-6 py-3 md:px-8 md:py-4 text-base md:text-lg font-extrabold shadow-lg
                 hover:bg-[#FFD900] transition-colors"
          aria-label="Tickets"
          target="_blank" rel="noopener noreferrer"
        >
          TICKETS
          <img src="/assets/arrow.svg" alt="→" class="ml-2 w-4 h-4 md:w-5 md:h-5" />
        </a>
      </div>
    </div>
  </div>
</section>