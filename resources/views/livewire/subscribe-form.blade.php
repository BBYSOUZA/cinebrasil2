<form wire:submit.prevent="subscribe" class="space-y-4">
    <input type="email"
           wire:model="email"
           placeholder="E-Mail hier"
           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"
           required>
    <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">
        Absenden
    </button>
</form>
    @if ($success)
        <div class="mt-4 text-green-500">
            Vielen Dank für Ihre Anmeldung!
        </div>
    @endif

    @if ($error)
        <div class="mt-4 text-red-500">
            Fehler: {{ $error }}
        </div>
    @endif
    <div class="max-w-md mx-auto p-4 bg-white shadow rounded">
    <form wire:submit.prevent="subscribe" class="space-y-4">
        <label for="email" class="block text-gray-700 font-bold">E-Mail-Adresse</label>
        <input 
            id="email"
            type="email"
            wire:model="email"
            placeholder="E-Mail hier"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"
            required
        >
        @error('email') 
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror

        <button type="submit" 
                class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">
            Absenden
        </button>
    </form>
</div>
