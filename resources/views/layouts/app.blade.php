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
            cineYellow: '#FFD900',
          },
          fontFamily: {
            oswald: ['Oswald', 'sans-serif'],
          },
        },
      },
    }
  </script>
</head>
<body class="font-oswald text-gray-800">
  <!-- Header (optional) -->

      <!-- Nav or flags can go here -->
    </div>
  </header>

  <!-- Main content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="max-w-[1440px] mx-auto px-6 text-center">
      <p class="text-sm">&copy; 2025 CineBrasil. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>