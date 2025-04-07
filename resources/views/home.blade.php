@extends('layouts.app')

@livewireStyles
@section('content')
  <!-- HERO SECTION -->
<livewire:header />
<section class="bg-blue-950 py-10 px-6 md:px-16 w-full z-10">
  <div class="bg-gradient-to-t from-blue-950 to-blue-900 p-6">
  <div class="w-full flex flex-col md:flex-row items-start py-6">
  <section
      class="w-full flex flex-col md:flex-row items-start gap-8 py-12"
      aria-labelledby="festival-stats-title">
  <!-- Column 1: YouTube Embed (on top for mobile, left on desktop) -->
    <div class="w-full md:w-1/2 order-1 md:order-2">
      <div class="flex w-full h-auto pb-[56.25%] relative">
        <iframe
          class="absolute top-0 left-0 w-full h-full rounded-lg"
          src="https://www.youtube.com/embed/56P0KCQnRhE?si=nOvoU6HdUmXfeSeQ"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture/> web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    <!-- Column 2: Film Details (below embed on mobile, right on desktop) -->
    <div class="text-left w-full md:w-1/2 order-2 md:order-1 space-y-3">
    <h2 class="font-bold text-white text-right rtl:text-left text-2xl uppercase tracking-wider font-semibold leading-5">
        &mdash; DEMNÄCHST IM APRIL &mdash;
      </h2>
      <h1 class="text-white text-6xl font-bold leading-30 text-right rtl:text-left ">
        O Palhaço (2011) <br>
        - "Der Clown"
      </h1> 
     <p class="text-white text-2xl font-bold leading-8 text-right rtl:text-left ">
        Regie: Selton Mello</p>
      <p class="text-white text-2xl font-bold leading-4 text-right rtl:text-left ">
        Brasilien, 2011, 90 Min., OmU
      </p>
      <p class="text-sm text-right rtl:text-left text-gray-500 dark:text-gray-400">
        Auf der Bühne Lachen und Applaus. Hinter den Kulissen Zweifel und
        Unsicherheit. Der Clown, inszeniert und gespielt von Selton Mello,
        erzählt die Geschichte von Benjamin, einem Zirkusclown, der seine Berufung
        hinterfragt. Zwischen der Magie der Manege und dem Wunsch nach einem normalen
        Leben muss er eine Entscheidung treffen. Ein bewegender, poetischer Film über
        Kunst und Identität.
      </p>
      <p class="text-white font-bold text-2xl leading-8 px-10">
        17.04. um 19:00 <br>
        <span>Babylon Mitte<br> <span/><span class="text-white font-bold text-lg leading-2">(Rosa-Luxemburg-Straße 10178 Berlin)</span>
      </p>
      <!-- Tickets Button -->
      <a
      href="https://babylonberlin.eu/film/8434-cinebrasil-o-palha-o"
      class="inline-block bg-[#FFF200] text-[#1D3470] px-7 py-3 text-xl font-extrabold shadow-xl hover:bg-[#FFD900] transition-colors text-xl leading-6"
      style="text-align: center; display: block; width: 100%; max-width: 300px; margin: 0 auto;"
      aria-label="Tickets"
      TICKETS 
      <img 
        src="/assets/arrow.svg" 
        alt="Arrow icon"
        class="inline-block w-6 h-6 ml-2"
      />
    </a>
    </div>
    </div>
</section>
</div>

  <!-- Statistics Section -->
  </body>
  <!doctype html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="w=full" />
    <title>CINEBRASIL Statistics Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <section
      class="w-full flex flex-col items-center py-12 w-full bg-neutral-100"
      aria-labelledby="festival-stats-title"
    >
      <h2
        id="festival-stats-title"
        class="w-full mb-10 text-5xl font-bold text-center text-[#346750] max-md:text-4xl max-sm:text-3xl"
      >
        CINEBRASIL – Das größte brasilianische Filmfestival in Deutschland
      </h2>

      <div
        class="flex flex-wrap gap-40 justify-center max-md:gap-8 max-sm:gap-5"
        role="list"
      >
        <!-- Visitors Statistic -->
        <article class="flex flex-col items-center" role="listitem">
          <div
            class="flex flex-col justify-center items-center p-5 text-center rounded-full border-4 border-[#346750] h-[200px] w-[200px]"
          >
            <p class="text-lg font-semibold text-[#346750]">MEHR ALS</p>
            <p class="text-5xl font-bold leading-none text-[#346750]">55.000</p>
            <p class="text-lg font-semibold text-[#346750]">
              BESUCHER*INNEN SEIT 2005
            </p>
          </div>
        </article>

        <!-- Films Statistic -->
        <article class="flex flex-col items-center" role="listitem">
          <div
            class="flex flex-col justify-center items-center p-5 text-center rounded-full border-4 border-[#346750] h-[200px] w-[200px]"
          >
            <p class="mb-2.5 text-5xl font-bold leading-none text-[#346750]">
              197
            </p>
            <p class="text-lg font-semibold text-[#346750]">
              FILME INSGESAMT VORGEFÜRHT
            </p>
          </div>
        </article>

        <!-- Cities Statistic -->
        <article class="flex flex-col items-center" role="listitem">
          <div
            class="flex flex-col justify-center items-center p-5 text-center rounded-full border-4 border-[#346750] h-[200x] w-[200px]"
          >
            <p class="mb-2.5 text-5xl font-bold leading-none text-[#346750]">
              20
            </p>
            <p class="text-base font-semibold text-[#346750]">
              STÄDTE IN DEUTSCHLAND, ÖSTERREICH UND DER SCHWEIZ
            </p>
          </div>
        </article>

        <!-- Years Statistic -->
        <article class="flex flex-col items-center" role="listitem">
          <div
            class="flex flex-col justify-center items-center p-5 text-center rounded-full border-4 border-[#346750] h-[200px] w-[200px]"
          >
            <p class="mb-4 text-5xl font-bold leading-none text-[#346750]">
              20
            </p>
            <p class="text-base font-semibold text-[#346750]">
              JAHRE BRASILIANISCHE FILLMKUNST IN EUROPA
            </p>
          </div>
        </article>
      </div>
    </section>
  </body>
</html>

<div>
  
  <div
    class="w=full flex-col items-center px-0 py-16 bg-[#0F2770]"
  >
    <div
      class="flex relative flex-col items-center h-[317px] max-md:h-auto max-md:w-[90%]"
    >
      <div
        class="mb-3 text-5xl font-bold text-center text-cineYellow max-md:text-4xl max-sm:text-3xl"
      >
      Fördern Sie CineBrasil!
      </div>
      <div
        class="mb-3 text-md font-medium text-neutral-100 text-center"
      >
      Wir sind stets auf der Suche nach verlässlichen Partnern, die unsere Vision eines lebendigen, interkulturellen Filmfestivals unterstützen möchten.<br>
      Ganz gleich, ob Sie als Hauptsponsor oder als projektbezogener Förderer einsteigen wollen – wir finden das passende Paket.
      </div>
      <div
        class="mb-4 text-xl font-bold text-center uppercase text-neutral-100 max-sm:text-xs"
      >
        INTERESSE GEWECKT? DANN SCHICKEN SIE UNS DOCH EINE MAIL UND<br>
        WIR LASSEN IHNEN UNSERE BROSCHÜRE GERNE ZUKOMMEN.
      </div>
      <div>
        <div>
          <svg
            id="2047:38"
            width="540"
            height="48"
            viewBox="0 0 540 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="email-input"
            style="width: 540px; height: 48px; margin-bottom: 12px"
          >
           <tspan x="23" y="29">E-Mail Adresse </tspan>
        </text>
        <path d="M540 0H0V47.9665H540V0Z" fill="#F7F7F7"></path> 
        </div>
      </div>
      <div>
        <div>
          <svg
            id="2047:45"
            layer-name="Button"
            width="223"
            height="40"
            viewBox="0 0 223 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="button"
            style="width: 223px; height: 40px; cursor: pointer"
          >
            <div>
            <a
                  href="#"
                  class="inline-block text-white bg-[#2C694D] px-3 py-3 font-extrabold color-[00000]
                        hover:bg-[568422] transition-colors text-lg leading-5 text-black items-center"
                  style="text-align: center; display: block; width: 100%; max-width: 300px; margin: 0 auto;"
                  aria-label="Broschüre"
              >   BROSCHÜRE ANFRAGEN
            </a>
              
            </div>
          </svg>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- ARCHIVE SECTION -->
  <div class="w-full h-0.5 bg-neutral-100"></div>
    <section
      class="archive-section flex overflow-hidden flex-col pt-10 mx-20 max-md:mx-5"
      aria-labelledby="archive-heading"
    >
    <h2
      id="archive-heading"
      class="z-10 self-center -mt-3.5 mb-4 text-4xl font-bold text-green-700"
    >
      – ARCHIV –
    </h2>
    <div class="w-full" id="archive-grid" space="30">
      <div class="flex gap-5 max-md:flex-col">
        <article class="w-[33%] max-md:ml-0">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/342813dceae47cf350c680c31aaea9ebaaeb2bbf?placeholderIfAbsent=true&apiKey=938de3edbdce4665870d0f9899de8cc3"
            alt="Archive item 1"
            class="object-contain overflow-hidden grow w-full aspect-square max-md:mt-8"
          />
        </article>
        <article class="ml-5 w-[33%] max-md:ml-0 max-md:w-full">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/32964c024cbfac1a8b5f3a316842239301415d1c?placeholderIfAbsent=true&apiKey=938de3edbdce4665870d0f9899de8cc3"
            alt="Archive item 2"
            class="object-contain overflow-hidden grow w-full aspect-square max-md:mt-8"
          />
          </article>
          <article class="ml-5 w-[33%] max-md:ml-0 max-md:w-full">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/c3aafc37b145c487e993a3257556cfc9b8b1c386?placeholderIfAbsent=true&apiKey=938de3edbdce4665870d0f9899de8cc3"
              alt="Archive item 3"
              class="object-contain overflow-hidden grow w-full aspect-square max-md:mt-8"
            />
          </article>
        </div>
      </div>
    </div>
</html>

  <!-- Archive access SECTION -->
  <section class="py-12">
    <div class="w-full mx-auto">
    <a
        href="#"
        class="inline-block text-white bg-[#2C694D] px-7 py-3 font-extrabold hover:bg-[#2C694D] transition-colors text-lg leading-6 items-center"
        style="text-align: center; display: block; width: 100%; max-width: 300px; margin: 0 auto;"
        aria-label="Archive"
    >   ZUM ARCHIV
    </a>
    </div>
@livewireScripts
@endsection