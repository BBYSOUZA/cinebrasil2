<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubscribeForm extends Component
{
    public $email;

    public function subscribe()
    {
        // Validierung der E-Mail-Adresse
        $this->validate([
            'email' => 'required|email',
        ]);

        // Hier kannst Du den E-Mail-Eintrag speichern,
        // z.B. in der Datenbank oder an einen Drittanbieter wie Mailchimp übergeben.
        
        // Anschließend leitet Livewire den Nutzer weiter:
        return redirect()->to('/thank-you');
    }

    public function render()
    {
        return view('livewire.subscribe-form');
    }
}