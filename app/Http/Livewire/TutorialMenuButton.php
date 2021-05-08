<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TutorialMenuButton extends Component
{

    public $name;
    public $buttonSize;

    public function mount($name,$buttonSize)
    {
        $this->name = $name;
        $this->buttonSize = $buttonSize;
    }
    public function render()
    {
        return view('livewire.tutorial-menu-button');
    }

    public function tutorialRedirect()
    {
        return redirect(route('tutorial'));
    }
}
