{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineBrasil</title>
  {{-- Tailwind imported once here --}}
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
  @livewireStyles
</head>
<body class="font-sans text-gray-800">
  {{-- Main Content --}}
  <main>@yield('content')</main>

  {{-- Horizontal separator before footer --}}
  <div class="w-full h-0.5 bg-green-800"></div>