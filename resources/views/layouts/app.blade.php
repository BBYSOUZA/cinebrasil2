<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CineBrasil</title>
  <!-- Tailwind from CDN for simplicity -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cineBlue: '#0F2773',
            cineYellow: '#FFF200',
            royalBlue: '#244087',
          },
          fontFamily: {
            commons: ['TT Commons Pto', 'sans-serif'],
          },
        },
      },
    }
  </script>
</head>
<body class="font-normal text-gray-800">
<!-- Header (optional) -->
  <!-- Nav or flags can go here -->

  <!-- Main content -->
  <main>
      @yield('content')
    </main>
  <!-- Add a horizontal separator -->
  <div class="w-full h-0.5 bg-green-800"></div>
</div>

    <footer class="bg-blue-950 text-white">
  <!-- Top row with 4 columns -->
  <div class="max-w-full mx-auto px-40 py-10 grid gap-8 
              md:grid-cols-4   <!-- 4 columns at md breakpoint (1380px) -->
              grid-cols-1">    <!-- 1 column below 768px -->

    <!-- Column 1: Brand + Text -->
    <div>
      <!-- Brand (Logo or text) -->
      <img 
        src="/assets/VARIACOES 2.svg" 
        alt="CineBrasil Logo" 
        class="w-auto h-auto mb-4"
        aria-label="CineBrasil Logo" 
      />
      <!-- Description text -->
      <nav class="flex gap-8 items-center" aria-label="Social media">
        <a href="#" class="hover:text-gray-300">
          <img src="/assets/Facbook.svg" alt="Facebook" class="w-10 h-10" />
        </a>
        <a href="#" class="hover:text-gray-300">
          <img src="/assets/Instagram.svg" alt="Instagram" class="w-10 h-10" />
        </a>
        <a href="#" class="hover:text-gray-300">
          <img src="/assets/Youtube.svg" alt="YouTube" class="w-10 h-10" />
        </a>
      </nav>
    </div>

    <!-- Column 2: BROWSE -->
    <nav aria-labelledby="browse-heading">
      <h3 id="browse-heading" class="text-2xl font-bold text-[#FFF200] uppercase mb-4">
        Browse
      </h3>
      <ul class="space-y-3 text-lg">
        <li><a href="{{ route('home') }}" class="hover:underline focus:ring-2 focus:ring-yellow-400">Home</a></li>
        <li><a href="{{ route('under-construction') }}" class="hover:underline focus:ring-2 focus:ring-yellow-400">Über Uns</a></li>
        <li><a href="{{ route('under-construction') }}" class="hover:underline focus:ring-2 focus:ring-yellow-400">20 Jahre CineBrasil</a></li>
        <li><a href="{{ route('contact-us') }}" class="hover:underline focus:ring-2 focus:ring-yellow-400">Kontakt</a></li>
      </ul>
    </nav>

    <!-- Column 3: RECHTLICHES -->
    <nav aria-labelledby="legal-heading">
      <h3 id="legal-heading" class="text-2xl font-bold text-[#FFF200] uppercase mb-4">
        Rechtliches
      </h3>
      <ul class="space-y-3 text-lg">
        <li>
          <a href="{{ route('impressum') }}" class="hover:underline focus:ring-2 focus:ring-[#FFF200]">Impressum</a>
        </li>
      </ul>
    </nav>

    <!-- Kontakt Column -->
<address class="not-italic" aria-label="Kontakt">
  <h3 class="text-2xl font-bold text-[#FFF200] uppercase mb-4">Kontakt</h3>

  <!-- Email Row -->
  <div class="flex gap-2 items-center mb-4">
    <!-- Optional icon for email, remove if you don't want one -->
    <img 
      src="/assets/mail.svg" 
      alt="" 
      class="w-6 h-auto" 
      aria-hidden="true"
    />
    <a 
      href="mailto:info@cinemanegro.de"
      class="hover:underline focus:ring-2 focus:ring-cineYellow text-lg"
    >
      info@cinemanegro.de
    </a>
  </div>

  <!-- Phone Row -->
  <div class="flex gap-2 items-center mb-4">
    <img
      src="/assets/phone.svg"
      alt=""
      class="w-6 h-auto"
      aria-hidden="true"
    />
    <a
      href="tel:+4901625430335"
      class="hover:underline focus:ring-2 focus:ring-cineYellow text-lg"
    >
      +49 (0)162 5430335
    </a>
  </div>

  <!-- Location Row -->
  <div class="flex gap-2 items-center text-lg">
    <img
      src="/assets/location.svg"
      alt=""
      class="w-6 h-auto"
      aria-hidden="true"
    />
    <p>Schönhauser Allee 32, 10435 Berlin</p>
  </div>
</address>

<!-- Bottom Bar:  Copyright -->
</footer>
<!-- Livewire Scripts -->
@livewireScripts
<footer class="bg-gray-800 fixed bottom-0 left-0 right-0">
  <p class="text-center px-4 py-2 text-white">
    © 2025 CineBrasil. Alle Rechte vorbehalten.
  </p>
</footer>
<!-- Optional: Include Alpine.js for interactivity -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
