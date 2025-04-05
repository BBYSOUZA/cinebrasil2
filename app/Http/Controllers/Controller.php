<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SponsorController;

Route::post('/send-sponsor-request', [SponsorController::class, 'sendEmail'])->name('sponsor.send');

abstract class Controller
{
    //
}
