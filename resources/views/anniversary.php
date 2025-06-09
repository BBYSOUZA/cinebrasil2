@extends('layouts.app')

@section('content')
<livewire:header />
@section('content')
   
    <div class="max-w-[800px] mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">20 Jahre CineBrasil</h1>
        <p class="text-lg mb-4">Das nächste Festival startet am 20. November 2025.</p>
        <div id="countdown" class="text-3xl font-mono"></div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const target = new Date('2025-11-20T00:00:00Z').getTime();
        const el = document.getElementById('countdown');
        setInterval(() => {
            const now = Date.now();
            const diff = target - now;
            if (diff <= 0) { el.textContent = 'Festival läuft!'; return; }
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((diff / (1000 * 60)) % 60);
            const seconds = Math.floor((diff / 1000) % 60);
            el.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }, 1000);
    });
</script>
@endsection