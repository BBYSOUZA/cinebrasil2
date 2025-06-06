<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MonthlyFeature::create([
            'title' => 'Cine Brasil Festival',
            'description' => 'A celebration of Brazilian cinema with screenings, workshops, and discussions.',
            'date' => '2025-07-15',
            'time' => '18:00:00',
            'venue' => 'Cine Teatro Brasil',
            'video_url' => 'https://example.com/video.mp4',
            'poster_path' => '/images/posters/cine_brasil_festival.jpg',
        ]);
    }
}
