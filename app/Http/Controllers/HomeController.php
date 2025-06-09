<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Replace these values each month for the hero section
        $heroVideoUrl     = 'https://www.youtube.com/embed/56P0KCQnRhE?si=nOvoU6HdUmXfeSeQ';
        $heroTitle        = 'O Palhaço (2011) Trailer';
        $heroSubtitle     = '— DEMNÄCHST IM APRIL —';
        $heroMainTitle    = 'O Palhaço (2011)<br /><span class="text-xl md:text-2xl font-semibold">— “Der Clown”</span>';
        $heroDirector     = 'Regie: Selton Mello';
        $heroMetaCountry  = 'Brasilien, 2011, 90 Min., OmU';
        $heroDescription  = 'Auf der Bühne Lachen und Applaus. Hinter den Kulissen Zweifel und Unsicherheit. Der Clown…';
        $heroDateTime     = '17.04. um 19:00';
        $heroVenue        = 'Babylon Mitte';
        $heroVenueAddress = '(Rosa-Luxemburg-Straße 10178 Berlin)';

        $heroTicketsUrl   = 'https://babylonberlin.eu/film/8434-cinebrasil-o-palha-o';

        return view('home', compact(
            'heroVideoUrl',
            'heroTitle',
            'heroSubtitle',
            'heroMainTitle',
            'heroDirector',
            'heroMetaCountry',
            'heroDescription',
            'heroDateTime',
            'heroVenue',
            'heroVenueAddress',
            'heroTicketsUrl',
        ));
    }
}