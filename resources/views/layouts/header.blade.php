{{-- resources/views/livewire/header.blade.php --}}
<div>
  <!-- 1) Top Flag Bar (Language Switcher) -->
  <div class="bg-gray-800 flex justify-end py-2 px-4 sm:px-6 lg:px-20">
    <div class="flex space-x-4">
      <a href="#" aria-label="Deutsch">
        <img src="/assets/ico-country-r-germany.svg" alt="German" class="w-10 h-8" />
      </a>
      <a href="#" aria-label="Português">
        <img src="/assets/brazil.svg" alt="Portuguese" class="w-10 h-8" />
      </a>
      <a href="#" aria-label="English">
        <img src="/assets/usa.svg" alt="English" class="w-10 h-8" />
      </a>
    </div>
  </div>

  <!-- 2) Gradient Nav Bar, Desktop Links, Social Icons, Mobile Burger -->
  <div class="bg-gradient-to-b from-gray-800 to-blue-950 w-full" x-data="{ open: false }">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-20 flex items-center justify-between py-4">
      <!-- Logo -->
      <a href="{{ route('home') }}" aria-label="CineBrasil 20 Years – Home">
        <img
          src="/assets/CINEBRASIL_LOGO.png"
          alt="CineBrasil Logo"
          class="object-contain h-[94px] w-[349px] max-md:h-[75px] max-md:w-[280px] max-sm:h-[54px] max-sm:w-[200px]"
        />
      </a>

      <!-- Desktop Nav Links (visible at ≥ 1280px) -->
      <nav class="hidden xl:flex space-x-8 font-bold text-xl" aria-label="Main navigation">
        <a href="{{ route('home') }}"        class="hover:text-gray-300">HOME</a>
        <a href="{{ route('under-construction') }}" class="hover:text-gray-300">ÜBER UNS</a>
        <a href="{{ route('under-construction') }}" class="hover:text-gray-300">20. CINEBRASIL</a>
        <a href="{{ route('under-construction') }}" class="hover:text-gray-300">ARCHIV</a>
        <a href="{{ route('contact-us') }}"  class="hover:text-gray-300">KONTAKT</a>
      </nav>

      <!-- Social Icons (visible at ≥ 1280px) -->
      <div class="hidden xl:flex gap-4" aria-label="Social media">
        <a href="https://www.facebook.com/cinebrasilberlin" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300" aria-label="Facebook">
          <img src="/assets/Facbook.svg" alt="Facebook" class="w-10 h-10" />
        </a>
        <a href="https://www.instagram.com/cinebrasil_official" target="_blank" rel="noopener noreferrer" class="hover:text-gray-300" aria-label="Instagram">
          <img src="/assets/Instagram.svg" alt="Instagram" class="w-10 h-10" />
        </a>
      </div>

      <!-- Mobile “Burger” Toggle (visible <1280px) -->
      <button @click="open = !open" class="xl:hidden" aria-label="Toggle menu">
        <template x-if="!open">
          <img src="/assets/fi-rr-menu-burger.svg" alt="Open menu" class="w-8 h-8 transition-transform duration-300" />
        </template>
        <template x-if="open">
          <img src="/assets/fi-rr-menu-burger-close.svg" alt="Close menu" class="w-8 h-8 transition-transform duration-300" />
        </template>
      </button>
    </div>

    <!-- Mobile Dropdown (slides down when open) -->
    <div
      x-show="open"
      @click.away="open = false"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 -translate-y-4"
      x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 -translate-y-4"
      class="xl:hidden bg-gray-800"
    >
      <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-20 py-4">
        <ul class="flex flex-col items-start space-y-4 font-bold text-xl text-white">
          <li>
            <a href="{{ route('home') }}" class="hover:text-green-300" @click="open = false">HOME</a>
          </li>
          <li>
            <a href="{{ route('under-construction') }}" class="hover:text-green-300" @click="open = false">ÜBER UNS</a>
          </li>
          <li>
            <a href="{{ route('under-construction') }}" class="hover:text-green-300" @click="open = false">20. CINEBRASIL</a>
          </li>
          <li>
            <a href="{{ route('under-construction') }}" class="hover:text-green-300" @click="open = false">ARCHIV</a>
          </li>
          <li>
            <a href="{{ route('contact-us') }}"  class="hover:text-green-300" @click="open = false">KONTAKT</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>