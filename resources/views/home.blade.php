@extends('layouts.app')

@section('content')
  <!-- HERO SECTION -->
  <livewire:header />
  <section class="bg-cineBlue text-white py-12">
    <div class="max-w-[1440px] mx-auto px-6 flex flex-col md:flex-row gap-8">
      <!-- Left: Film Info -->
      <div class="md:w-1/2">
        <h1 class="text-3xl font-bold mb-2">DEMNÄCHST IM APRIL – O PALHAÇO (The Clown)</h1>
        <p class="mb-4">Dir. Selton Mello, 2011</p>
        <p class="mb-4">Vorführung: 10.4. um 19:00<br>Location: Musterstraße 39, 10117 Berlin</p>
        <a href="#" class="inline-block bg-cineYellow text-black font-semibold px-6 py-2 rounded hover:bg-yellow-300">
          Tickets
        </a>
      </div>
      <!-- Right: Trailer Embed -->
      <div class="md:w-1/2 aspect-w-16 aspect-h-9 bg-black">
        <iframe 
          class="w-full h-full" 
          src="https://www.youtube.com/embed/YourTrailerID" 
          frameborder="0" 
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </section>

  <!-- 20 JAHRE CINEBRASIL -->
  <section class="py-12">
    <div class="max-w-[1440px] mx-auto px-6">
      <h2 class="text-3xl font-bold text-cineBlue mb-6">20 JAHRE CINEBRASIL</h2>
      <div class="flex flex-wrap gap-4">
        <!-- Example circles or tags for each day -->
        <div class="w-20 h-20 rounded-full bg-cineBlue text-white flex items-center justify-center">
          Tag 01
        </div>
        <div class="w-20 h-20 rounded-full bg-cineBlue text-white flex items-center justify-center">
          Tag 02
        </div>
        <div class="w-20 h-20 rounded-full bg-cineBlue text-white flex items-center justify-center">
          Tag 03
        </div>
        <div class="w-20 h-20 rounded-full bg-cineBlue text-white flex items-center justify-center">
          Tag 04
        </div>
      </div>
    </div>
  </section>

  <!-- SPONSOR SECTION -->
  <section class="bg-gray-100 py-12">
    <div class="max-w-[1440px] mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-cineBlue mb-6">Werden Sie Sponsor!</h2>
      <p class="max-w-xl mx-auto mb-8">
        Möchten Sie CineBrasil unterstützen? Hier ist unsere einmalige Möglichkeit zu helfen.
      </p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Sponsor Card 1 -->
        <div class="bg-white p-4 rounded shadow">
          <img src="/images/sponsor1.jpg" alt="Sponsor 1" class="mb-4 w-full h-40 object-cover rounded">
          <h3 class="text-lg font-semibold mb-2">Sponsor Name 1</h3>
          <p class="text-sm">Kurzinfo über das Sponsoring.</p>
        </div>
        <!-- Sponsor Card 2 -->
        <div class="bg-white p-4 rounded shadow">
          <img src="/images/sponsor2.jpg" alt="Sponsor 2" class="mb-4 w-full h-40 object-cover rounded">
          <h3 class="text-lg font-semibold mb-2">Sponsor Name 2</h3>
          <p class="text-sm">Kurzinfo über das Sponsoring.</p>
        </div>
        <!-- Sponsor Card 3 -->
        <div class="bg-white p-4 rounded shadow">
          <img src="/images/sponsor3.jpg" alt="Sponsor 3" class="mb-4 w-full h-40 object-cover rounded">
          <h3 class="text-lg font-semibold mb-2">Sponsor Name 3</h3>
          <p class="text-sm">Kurzinfo über das Sponsoring.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ARCHIVE SECTION -->
  <section class="py-12">
    <div class="max-w-[1440px] mx-auto px-6">
      <h2 class="text-3xl font-bold text-cineBlue mb-6">ARCHIV</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Poster 1 -->
        <div class="bg-white rounded shadow">
          <img src="/images/poster1.jpg" alt="Poster 1" class="w-full h-72 object-cover rounded-t">
          <p class="p-4">Film details or year, etc.</p>
        </div>
        <!-- Poster 2 -->
        <div class="bg-white rounded shadow">
          <img src="/images/poster2.jpg" alt="Poster 2" class="w-full h-72 object-cover rounded-t">
          <p class="p-4">Film details or year, etc.</p>
        </div>
        <!-- Poster 3 -->
        <div class="bg-white rounded shadow">
          <img src="/images/poster3.jpg" alt="Poster 3" class="w-full h-72 object-cover rounded-t">
          <p class="p-4">Film details or year, etc.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TICKETS SECTION -->
  <section class="py-12">
    <div class="max-w-[1440px] mx-auto px-6">
      <h2 class="text-3xl font-bold text-cineBlue mb-4">Tickets</h2>
      <p class="mb-4 max-w-lg">
        Informationen zum Ticketverkauf. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Curabitur vitae diam vitae lorem tempus semper.
      </p>
      <a href="#" class="inline-block bg-cineYellow text-black font-semibold px-6 py-2 rounded hover:bg-yellow-300">
        Jetzt Kaufen
      </a>
    </div>
  </section>
@endsection