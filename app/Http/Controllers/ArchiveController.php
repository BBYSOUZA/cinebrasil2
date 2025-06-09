<?php

namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 
 class ArchiveController extends Controller
 {
    /**
     * Show a list of available archive years.
     */
     public function index()
     {
        $archives = config('archives');
        return view('archive.index', ['archives' => $archives]);
     }

    /**
     * Display a specific archive entry.
     */
    public function show(string $archive)
    {
        $archives = config('archives');

        abort_unless(array_key_exists($archive, $archives), 404);

        return view('archive.show', ['archive' => $archives[$archive]]);
    }
}