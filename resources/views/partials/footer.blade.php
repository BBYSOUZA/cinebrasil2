{{-- Horizontal separator before footer --}}
<div class="w-full h-0.5 bg-green-800"></div>

  {{-- 4-Column Footer --}}
  
  <footer class="bg-blue-950 text-white pt-10 pb-6">
    <div class="max-w-[1440px] mx-auto px-6 md:px-20 grid grid-cols-1 md:grid-cols-4 gap-8">

      {{-- Column 1: Company Info + Short Blurb --}}
      <div class="space-y-4">
        <img src="/assets/CINEBRASIL_LOGO.png" alt="CineBrasil Logo" class="w-32 h-auto mb-2">
        <p class="text-xs md:text-sm leading-tight">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Standard dummy text ever since the 1500s.
        </p>
      </div>

      {{-- Column 2: Browse --}}
      <nav aria-labelledby="browse-heading">
        <h3 id="browse-heading" class="text-base md:text-lg font-bold text-yellow-400 uppercase mb-2">
          Browse
        </h3>
        <ul class="space-y-2 text-xs md:text-sm">
          <li><a href="{{ route('home') }}" class="hover:text-yellow-300">Home</a></li>
          <li><a href="{{ route('über-uns') }}" class="hover:text-yellow-300">Über Uns</a></li>
          <li><a href="{{ route('anniversary') }}" class="hover:text-yellow-300">20 Jahre CineBrasil</a></li>
          <li><a href="{{ route('contact') }}" class="hover:text-yellow-300">Kontakt</a></li>
        </ul>
      </nav>

      {{-- Column 3: Rechtliches --}}
      <nav aria-labelledby="legal-heading">
        <h3 id="legal-heading" class="text-base md:text-lg font-bold text-yellow-400 uppercase mb-2">
          Rechtliches
        </h3>
        <ul class="space-y-2 text-xs md:text-sm">
          <li><a href="{{ route('impressum') }}" class="hover:text-yellow-300">Impressum</a></li>
        </ul>
      </nav>

      {{-- Column 4: Kontakt --}}
      <div aria-labelledby="contact-heading">
        <h3 id="contact-heading" class="text-base md:text-lg font-bold text-yellow-400 uppercase mb-2">
          Kontakt
        </h3>
        <p class="text-xs md:text-sm mb-2">
          <span class="inline-block align-middle mr-1">✉️</span>
          <a href="mailto:info@cinemanegro.de" class="hover:text-yellow-300 underline">
            info@cinemanegro.de
          </a>
        </p>
        <p class="text-xs md:text-sm mb-2">
          <span class="inline-block align-middle mr-1">📞</span>+49 (0)162 5430335
        </p>
        <p class="text-xs md:text-sm">
          <span class="inline-block align-middle mr-1">📍</span>
          Schönhauser Allee 32, 10435 Berlin
        </p>
      </div>
    </div>

    {{-- Bottom Bar: Copyright --}}
    <div class="bg-gray-800 mt-8">
  <div class="max-w-[1440px] mx-auto px-6 md:px-20 py-3">
    <p class="text-center text-xs md:text-sm text-gray-300 mb-0">
      © 2025 CineBrasil. Alle Rechte vorbehalten. <br class="md:hidden">
      Developed by Laís Takano.
    </p>
    </div>  
  </footer>
