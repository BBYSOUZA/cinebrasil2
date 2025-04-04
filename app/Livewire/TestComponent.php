<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public function render()
    {
        return <<<'BLADE'
        <div>
            <p>TestComponent loaded successfully!</p>
        </div>
        BLADE;
    }
}