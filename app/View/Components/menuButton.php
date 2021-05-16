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
    public $wireClickFunction;

    public function __construct($name,$buttonSize,$wireClickFunction)
    {
        $this->buttonSize=$buttonSize;
        $this->wireClickFunction = $wireClickFunction;
        $this->name = $name;
    }

    public function render()
    {
        return view('components.menu-button');
    }
}
