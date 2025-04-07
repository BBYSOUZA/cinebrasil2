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
  <!-- Top Footer Content: Four Separate Columns -->
  <div class="w-full h-80 px-40 py-20 grid grid-cols-1 lg:grid-cols-4 gap-6 flex justify-evenly">
    <!-- Column 1: Company Info -->
    <div>
      <img src="/assets/CINEBRASIL_LOGO.png" alt="CineBrasil Logo" class="w-80 h-auto mb-2" />
      <!-- Social Media Icons -->
      <nav class="flex gap-4 justify-start mt-4" aria-label="Socials">
        <a href="#" class="hover:text-gray-300">
          <img src="/assets/Facbook.svg" alt="Facebook" class="w-10 h-10" />
        </a>
        <a href="#" class="hover:text-gray-300">
          <img src="/assets/Instagram.svg" alt="Instagram" class="w-10 h-10" />
        </a>
      </nav>
    </div>

    <!-- Column 2: Browse -->
    <div>
      <h3 class="text-2xl font-bold text-cineYellow uppercase mb-2">Browse</h3>
      <ul class="space-y-1 text-lg">
        <li><a href="{{ route('home') }}" class="hover:underline hover:text-cineYellow">Home</a></li>
        <li><a href="{{ route('under-construction') }}" class="hover:underline hover:text-cineYellow">Über Uns</a></li>
        <li><a href="{{ route('under-construction') }}" class="hover:underline hover:text-cineYellow">20 Jahre CineBrasil</a></li>
        <li><a href="{{ route('contact-us') }}" class="hover:underline hover:text-cineYellow">Kontakt</a></li>
      </ul>
    </div>

    <!-- Column 3: Rechtliches -->
    <div>
      <h3 class="text-2xl font-bold text-cineYellow uppercase mb-2">Rechtliches</h3>
      <ul class="space-y-1 text-lg">
        <li><a href="{{ route('impressum') }}" class="hover:underline hover:text-cineYellow">Impressum</a></li>
      </ul>
    </div>

    <!-- Column 4: Kontakt -->
    <div>
      <h3 class="text-2xl font-bold text-cineYellow uppercase mb-2">Kontakt</h3>
      <p class="text-lg mb-1">
        E-Mail: <a href="mailto:info@cinemanegro.de" class="underline hover:text-cineYellow">info@cinemanegro.de</a>
      </p>
      <p class="text-lg mb-1">
        Tel: <a href="tel:+4901625430335" class="hover:underline hover:text-cineYellow">+49 (0) 162 5430335</a>
      </p>
      <p class="text-lg">
        <a href="https://www.google.com/maps/place/Cinebrasil/@52.5372782,13.4127452,17z/data=!3m1!4b1!4m6!3m5!1s0x47a851fe72e509d5:0xc881df3999d6e1f9!8m2!3d52.5372782!4d13.4127452!16s%2Fg%2F11y46t0wrq?entry=ttu&g_ep=EgoyMDI1MDQwMi4xIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D" target="_blank" class="hover:underline hover:text-cineYellow">Schönhauser Allee 32, 10435 Berlin</a>
      </p>
    </div>
  </div>

  <!-- Bottom Footer: Full-Width Anchored Bar -->
  <div class="bg-gray-800 w-full">
    <div class="w-full px-20 py-3">
      <p class="text-center text-lg font-light">
        © 2025 CineBrasil. Alle Rechte vorbehalten.<br>
        <span class="text xxs font-light"</span>Developed by Laís Takano.<a href="{{ route('impressum') }}"
      </p>
    </div>
  </div>
</footer>
<!-- Optional: Include Alpine.js for interactivity -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
