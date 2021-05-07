<?php

namespace App\View\Components;

use Illuminate\View\Component;

class menuButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $buttonSize;
    public function __construct($name,$buttonSize)
    {
        $this->name = $name;
        $this->buttonSize=$buttonSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-button');
    }
}
