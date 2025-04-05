@extends('layouts.app')

@livewireStyles
@section('content')
  <!-- HERO SECTION -->
  <livewire:header />
  <div class="bg-gradient-to-t from-blue-950 to-blue-900 p-6">
  <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row items-start gap-8 py-6">
    <!-- Column 1: YouTube Embed (on top for mobile, left on desktop) -->
    <div class="w-full md:w-1/2 order-1 md:order-2">
      <div class="flex w-full h-auto pb-[56.25%] relative">
        <iframe
          class="absolute top-0 left-0 w-full h-full rounded-lg"
          src="https://www.youtube.com/embed/56P0KCQnRhE?si=nOvoU6HdUmXfeSeQ"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    <!-- Column 2: Film Details (below embed on mobile, right on desktop) -->
    <div class="text-left w-full md:w-1/2 order-2 md:order-1 space-y-3">
      <h2 class="text-white text-2xl uppercase tracking-wider font-semibold leading-5">
        &mdash; DEMNÄCHST IM APRIL &mdash;
      </h2>
      <h3 class="text-white text-3xl md:text-4xl font-black leading-5">
        O PALHAÇO (Der Clown) 
        <br>Dir. Selton Mello (2011)
      </h3>
      <p class="text-white text-lg leading-5 font-medium">
        Auf der Bühne Lachen und Applaus. Hinter den Kulissen Zweifel und
        Unsicherheit. Der Clown, inszeniert und gespielt von Selton Mello,
        erzählt die Geschichte von Benjamin, einem Zirkusclown, der seine Berufung
        hinterfragt. Zwischen der Magie der Manege und dem Wunsch nach einem normalen
        Leben muss er eine Entscheidung treffen. Ein bewegender, poetischer Film über
        Kunst und Identität.
      </p>
      <p class="text-white font-bold text-2xl leading-8">
        17.04. um 19:00 <br/>
        <span class="text-white font-bold text-2xl">Babylon Mitte</span> <span class="text-white font-bold text-lg leading-2">(Rosa-Luxemburg-Straße 10178 Berlin)</span>
      </p>
      <!-- Tickets Button -->
      <a
      href="https://babylonberlin.eu/film/8434-cinebrasil-o-palha-o"
      class="inline-block bg-[#FFF200] text-[#1D3470] px-7 py-3 text-xl font-extrabold shadow-xl hover:bg-[#FFD900] transition-colors text-xl leading-6"
    >
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CINEBRASIL Statistics Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section
      class="flex flex-col items-center px-20 py-12 w-full bg-neutral-100 max-md:px-10 max-md:py-8 max-sm:p-7"
      aria-labelledby="festival-stats-title"
    >
      <h2
        id="festival-stats-title"
        class="mb-10 text-5xl font-bold text-center text-[#346750] max-md:text-4xl max-sm:text-3xl"
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
    class="flex flex-col gap-3 items-center px-0 py-16 w-full bg-[#0F2770] max-sm:px-5 max-sm:py-10"
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
        <text
              fill="#D9D9D9"
              xml:space="preserve"
              style="white-space: pre"
              font-family="Archivo Narrow"
              font-size="14"
              font-weight="bold"
              letter-spacing="0em"
            >
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

  <!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Archive Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section
      class="archive-section flex overflow-hidden flex-col pt-10 mx-20 max-md:mx-5"
      aria-labelledby="archive-heading"
    >
      <h2
        id="archive-heading"
        class="z-10 self-center -mt-3.5 text-4xl font-bold text-green-700"
      >
        – ARCHIV –
      </h2>
      <div class="mt-10 w-full max-md:max-w-full" id="archive-grid" space="30">
        <div class="flex gap-5 max-md:flex-col">
          <article class="w-[33%] max-md:ml-0 max-md:w-full">
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
    </section>

    <script>
      (() => {
        // Set the space attribute on the archive grid element
        document.getElementById("archive-grid").setAttribute("space", "30");
      })();
    </script>
  </body>
</html>

  <!-- Archive access SECTION -->
  <section class="py-12">
    <div class="max-w-full mx-auto px-6">
    <a
        href="#"
        class="inline-block text-white bg-[#2C694D] px-7 py-3 font-extrabold
               hover:bg-[#2C694D] transition-colors text-lg leading-6 items-center"
        style="text-align: center; display: block; width: 100%; max-width: 300px; margin: 0 auto;"
        aria-label="Archive"
    >   ZUM ARCHIV
    </a>
    </div>
@livewireScripts
@endsection