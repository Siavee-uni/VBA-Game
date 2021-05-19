<?php

namespace App\View\Components;

use Illuminate\View\Component;

class menuButton extends Component
{
    public string $name;
    public string $buttonSize;
    public string $wireClickFunction;

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
