<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Challanges extends Component
{
    public function render()
    {
        return view('livewire.challanges');
    }
    public function challenge($id)
    {
        return redirect()->route('challengeController', ['id' => $id]);
    }
}
