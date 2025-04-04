<header>
  <!-- Top Flag Bar (Language Flags) -->
  <div class="bg-gray-800 flex justify-end py-2 px-20">
    <div class="flex space-x-4">
      <a href="#"><img src="/assets/ico-country-r-germany.svg" alt="German" class="w-10 h-8"></a>
      <a href="#"><img src="/assets/brazil.svg" alt="Portuguese" class="w-10 h-8"></a>
      <a href="#"><img src="/assets/usa.svg" alt="English" class="w-10 h-8"></a>
    </div>
  </div>
  
  <header
    class="bg-blue-900 pt-[60px] flex justify-between items-center px-20 py-10 w-full h-[166px] max-md:px-10 max-md:py-0 max-sm:px-5 max-sm:py-0 max-sm:h-[120px]"
    role="banner">
  <a href="#" aria-label="CineBrasil 20 Years - Home">
    <img
      src="/assets/CineBrasil_LOGO.png"
      alt="CineBrasil 20 Years"
      class="object-contain h-[94px] w-[349px] max-md:h-[75px] max-md:w-[280px] max-sm:h-[54px] max-sm:w-[200px]"
    />
  </a>

<!-- Right: Group Main Nav and Social Media -->
<div class="flex items-center gap-8">
    <!-- Main Navigation -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                cineBlue: '#0F2773',
                cineYellow: '#FFD900',
            },
            fontFamily: {
                oswald: ['Oswald', 'sans-serif'],
            },
            },
        },
        }
    </script>
  <nav class="flex gap-8" role="navigation" aria-label="Main navigation">
      <ul class="flex space-x-8">
        <li>
          <a
            href="#"
            class="text-white hover:text-gray-300 transition-colors font-custom text-xl"
            >HOME</a>
        </li>
        <li>
          <a
            href="#"
            class="text-white hover:text-gray-300 transition-colors font-custom text-xl"
            >ÜBER UNS</a>
        </li>
        <li>
          <a
            href="#"
            class="text-white hover:text-gray-300 transition-colors font-custom text-xl"
            >20. CINEBRASIL</a
          >
        </li>
        <li>
          <a
            href="#"
            class="text-white hover:text-gray-300 transition-colors font-custom text-xl"
            >ARCHIV</a>
        </li>
        <li>
          <a
            href="#"
            class="text-white hover:text-gray-300 transition-colors font-custom text-xl"
            >KONTAKT</a>
        </li>
      </ul>
    </nav>

    <!-- Social Media Icons -->
    <nav class="flex gap-4 items-center max-sm:hidden" aria-label="Social media">
      <a href="#" class="text-white hover:text-gray-300">
        <img src="/assets/Facbook.svg" alt="Facebook" class="w-10 h-10" />
      </a>
      <a href="#" class="text-white hover:text-gray-300">
        <img src="/assets/Instagram.svg" alt="Instagram" class="w-10 h-10" />
      </a>
    </nav>
  </div>

  <!-- Hamburger Menu (mobile only) -->
  <button class="hidden max-sm:block" aria-label="Open menu" aria-expanded="false">
    <img src="/assets/fi-rr-menu-burger.svg" alt="Menu" class="w-6 h-6" />
  </button>
</header>