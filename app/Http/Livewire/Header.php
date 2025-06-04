<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        // This should reference the Blade view exactly as 'livewire.header'
        return view('livewire.header');
    }
}