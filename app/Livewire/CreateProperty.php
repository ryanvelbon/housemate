<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateProperty extends Component
{
    #[Layout('layouts.portal')]
    public function render()
    {
        return view('livewire.create-property');
    }
}
