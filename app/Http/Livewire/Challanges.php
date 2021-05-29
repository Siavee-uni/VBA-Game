<?php

namespace App\Http\Livewire;

use App\Models\Challenge;
use Livewire\Component;

class Challanges extends Component
{
    public $challenges;

    public function render()
    {
        return view('livewire.challanges');
    }

    public function mount() {
        $this->challenges = Challenge::all();
    }
    public function challenge($id)
    {
        return redirect()->route('challenge', ['id' => $id]);
    }
}
