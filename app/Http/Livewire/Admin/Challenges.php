<?php

namespace App\Http\Livewire\Admin;

use App\Models\Challenge;
use Livewire\Component;

class Challenges extends Component
{

    public object $challenges;

    public function render()
    {
        return view('livewire.admin.challenges');
    }

    public function mount() {
        $this->challenges = Challenge::all();
    }
}
