<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DragAndDropTask extends Component
{
    public $codeBlocks = [];

    public function render()
    {
        return view('livewire.drag-and-drop-task');
    }

    public function mount($codeBlocks)
    {
        $this->codeBlocks = $codeBlocks;
    }
}
