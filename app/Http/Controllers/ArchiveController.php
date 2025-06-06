<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    // Display a list of all editions (links to each detail)
    public function index()
    {
        $editions = Archive::orderBy('year', 'desc')->get();
        return view('archive.index', compact('editions'));
    }

    // Display a single edition’s detail page via route‐model binding on slug
    public function show(Archive $archive)
    {
        return view('archive.show', compact('archive'));
    }
}
