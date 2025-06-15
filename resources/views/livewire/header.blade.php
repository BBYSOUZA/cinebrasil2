{{-- resources/views/livewire/header.blade.php --}}
<header x-data="{ open: false }" class="relative z-20 w-full">
  {{-- 1) Top Flag Bar --}}
  <div class="bg-gray-800 px-6 md:px-20 flex justify-end py-6">
    <div class="flex space-x-4">
      <a href="#" aria-label="Deutsch"><img src="/assets/ico-country-r-germany.svg" alt="German" class="w-8 h-6"></a>
      <a href="#" aria-label="Português"><img src="/assets/brazil.svg" alt="Portuguese" class="w-8 h-6"></a>
      <a href="#" aria-label="English"><img src="/assets/usa.svg" alt="English" class="w-8 h-6"></a>
    </div>
  </div>

  {{-- 2) Main Header Section --}}
  <div class="bg-gradient-to-b from-gray-800 to-blue-950 text-white relative ">
    {{-- 2.1) Horizontal Separator --}}
    <div class="max-w-[1440px] mx-auto md:px-20 flex items-center justify-between h-[50px] relative">
      {{-- Logo --}}
      <a href="{{ route('home') }}" aria-label="CineBrasil Home"">
        <img
          src="/assets/CINEBRASIL_LOGO.png"
          alt="CineBrasil 20 Jahre"
          class="h-10 md:h-12 lg:h-16 max-h-[64px] w-auto block"
        >
      </a>

      {{-- Desktop Nav (>=1280px) --}}
      <nav class="hidden xl:flex space-x-8 font-bold text-white text-sm md:text-base">
        <a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors">HOME</a>
        <a href="{{ route('über-uns') }}" class="hover:text-gray-300 transition-colors">ÜBER UNS</a>
        <a href="{{ route('anniversary') }}" class="hover:text-gray-300 transition-colors">20. CINEBRASIL</a>
        <a href="{{ route('archive') }}" class="hover:text-gray-300 transition-colors">ARCHIV</a>
        <a href="{{ route('contact') }}" class="hover:text-gray-300 transition-colors">KONTAKT</a>
      </nav>

      {{-- Desktop Social Icons (>=1280px) --}}
      <div class="hidden xl:flex space-x-4">
        <a href="#" class="hover:text-gray-300"><img src="/assets/Facbook.svg" alt="Facebook" class="w-6 h-6"></a>
        <a href="#" class="hover:text-gray-300"><img src="/assets/Instagram.svg" alt="Instagram" class="w-6 h-6"></a>
      </div>

      {{-- Mobile Container (<=1279px): Social Icons + Hamburger --}}
      <div class="flex items-center xl:hidden space-x-4">
        <a href="#" class="hover:text-gray-300"><img src="/assets/Facbook.svg" alt="Facebook"></a>
        <a href="#" class="hover:text-gray-300"><img src="/assets/Instagram.svg" alt="Instagram"></a>
        <button @click="open = !open" aria-label="Toggle menu" class="focus:outline-none">
          <img
            x-show="!open"
            src="/assets/fi-rr-menu-burger.svg"
            alt="Open menu"
            class="w-6 h-6 transition-transform duration-200">
          <img x-show="open"
              src="/assets/fi-rr-menu-burger.svg"
              alt="Close menu"
              class="w-6 h-6 rotation-90 transition-transform duration-200"
          >
        </button>
      </div>
    </div>

    {{-- 3) Horizontal Separator --}}
    <div class="mt-8 h-0.5 bg-green-800"></div>
  </div>

  {{-- 4) Mobile Dropdown (slides in from right) --}}
  <div
    x-show="open"
    @click.away="open = false"
    x-transition:enter="transition-transform ease-out duration-500"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition-transform ease-in duration-500"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="fixed top-0 right-0 w-4/5 max-w-xs h-screen bg-white shadow-lg overflow-y-auto z-30"
  >
    <div class="px-6 py-6">
      {{-- Close Button --}}
      <div class="flex justify-end">
        <button @click="open = false" aria-label="Close menu" class="focus:outline-none">
          <img src="/assets/fi-rr-menu-burger.svg" alt="Close" class="w-6 h-6 rotation-45">
        </button>
      </div>

      {{-- Mobile Nav Links --}}
      <nav class="mt-6">
        <ul class="flex flex-col space-y-4 font-semibold text-gray-800">
          <li><a href="{{ route('home') }}" @click="open = false" class="hover:text-green-800">HOME</a></li>
          <li><a href="{{ route('under-construction') }}" @click="open = false" class="hover:text-green-800">ÜBER UNS</a></li>
          <li><a href="{{ route('under-construction') }}" @click="open = false" class="hover:text-green-800">20. CINEBRASIL</a></li>
          <li><a href="{{ route('under-construction') }}" @click="open = false" class="hover:text-green-800">ARCHIV</a></li>
          <li><a href="{{ route('contact') }}" @click="open = false" class="hover:text-green-800">KONTAKT</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</header>