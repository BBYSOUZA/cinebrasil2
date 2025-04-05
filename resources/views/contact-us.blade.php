@extends('layouts.app')

@section('content')
<livewire:header />

<section class="bg-blue-950 text-white text-centerpy-12 py-8 md:px-20">
  <div class="max-w-[1440px] h-full mx-auto">
    <h1 class="text-3xl font-bold text-cineYellow mb-6 flex-col items-center justify-center"">Kontakt</h1>
      <p class="mb-2">
        Sie können uns direkt über folgende Kanäle erreichen:
      </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-6">Organisation/Geschäftsleitung</h2>
    <p class="mb-4">
      Sidney Martins<br>
      Telefon: +49 (0)162 5430335<br>
      E-Mail: <a href="mailto:info@cinemanegro.de" class="underline hover:text-yellow-400">info@cinemanegro.de</a>
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-6">Social Media-Kanäle</h2>
    <p class="mb-4">
      Letícia Alves<br>
      E-Mail: <a href="mailto:socialmedia@cinebrasil.info" class="underline hover:text-yellow-400">socialmedia@cinebrasil.info</a>
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-6">Verwaltung</h2>
    <p class="mb-4">
      Luanny Tiago<br>
      E-Mail: <a href="mailto:luanny@cinebrasil.info" class="underline hover:text-yellow-400">luanny@cinebrasil.info</a>
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-6">Presse & Digital</h2>
    <p class="mb-4">
      Laís Yukie de Souza Takano<br>
      E-Mail: <a href="mailto:lais@cinebrasil.info" class="underline hover:text-yellow-400">lais@cinebrasil.info</a>
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-6">Grafik</h2>
    <p class="mb-4">
      Isabella Isabella Pikart
      E-Mail: <a href="mailto:mail@vaporetta.org" class="underline hover:text-yellow-400">mail@vaporetta.org</a>
    </p>
  </div>
</section>
@endsection