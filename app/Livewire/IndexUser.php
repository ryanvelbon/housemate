<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUser extends Component
{
    use WithPagination;

    public function render()
    {
        $members = User::query()
            ->with('nationality')
            ->with('city')
            ->paginate(12);

        return view('livewire.index-user', [
            'members' => $members,
        ]);
    }
}
