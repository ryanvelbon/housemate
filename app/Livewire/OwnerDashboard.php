<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class OwnerDashboard extends Component
{
    #[Layout('layouts.portal')]
    public function render()
    {
        return view('livewire.owner-dashboard');
    }
}
