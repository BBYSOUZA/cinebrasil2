<header>
  <!-- Top Flag Bar (Language Flags) -->
  <div class="bg-gray-800 flex justify-end py-2 px-20">

    <div class="flex space-x-4">
      <a href="#"><img src="/assets/ico-country-r-germany.svg" alt="German" class="w-10 h-8"></a>
      <a href="#"><img src="/assets/brazil.svg" alt="Portuguese" class="w-10 h-8"></a>
      <a href="#"><img src="/assets/usa.svg" alt="English" class="w-10 h-8"></a>
    </div>
  </div>

  <!-- Main Header Section -->
  <section class="bg-gradient-to-r from-[#0F2773] to-[#1C2F5A] text-white py-10 px-20 w-full z-10">
    <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row items-center justify-between">
      <!-- Logo -->
      <a href="#" aria-label="CineBrasil 20 Years - Home">
        <img src="/assets/CINEBRASIL_LOGO.png" alt="CineBrasil 20 Years" class="object-contain h-[94px] w-[349px] max-md:h-[75px] max-md:w-[280px] max-sm:h-[54px] max-sm:w-[200px]">
      </a>
      <!-- Navigation Links (visible on xl screens and up) -->
      <nav class="hidden xl:flex" role="navigation" aria-label="Main navigation">
        <ul class="flex space-x-8 font-bold text-xl">
          <li><a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors">HOME</a></li>
          <li><a href="{{ route('under-construction') }}" class="hover:text-gray-300 transition-colors">ÜBER UNS</a></li>
          <li><a href="{{ route('under-construction') }}" class="hover:text-gray-300 transition-colors">20. CINEBRASIL</a></li>
          <li><a href="{{ route('under-construction') }}" class="hover:text-gray-300 transition-colors">ARCHIV</a></li>
          <li><a href="{{ route('contact-us') }}" class="hover:text-gray-300 transition-colors">KONTAKT</a></li>
        </ul>
      </nav>
      <!-- Social Media Icons -->
      <nav class="flex gap-4 justify-end m-4" aria-label="Socials">
        <a href="#" class="hover:text-gray-300">
          <img src="/assets/Facbook.svg" alt="Facebook" class="w-10 h-10" />
        </a>
        <a href="#" class="hover:text-gray-300">
          <img src="/assets/Instagram.svg" alt="Instagram" class="w-10 h-10" />
        </a>
      </nav>
      <!-- Hamburger Menu (visible on screens below xl) -->
      <button class="xl:hidden" aria-label="Open menu" aria-expanded="false">
        <img src="/assets/fi-rr-menu-burger.svg" alt="Menu" class="w-8 h-8" />
      </button>
    </div>
  </section>

  <!-- Horizontal Separator -->
  <div class="w-full h-0.5 bg-green-800"></div>
</header>