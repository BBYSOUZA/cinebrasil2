@livewire('subscribe-form')
#     <div class="mt-4">
#         <p class="text-gray-500">
#             Sie können sich jederzeit abmelden, indem Sie auf den Link in der E-Mail klicken.
#         </p>
#     </div>
# </div>
#
#     <script src="https://cdn.tailwindcss.com"></script>
#     <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBrasil</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">