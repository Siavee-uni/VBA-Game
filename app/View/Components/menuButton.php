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
    public $wireClick;
    public function __construct($name,$buttonSize,$wireClick)
    {
        $this->buttonSize=$buttonSize;
        $this->wireClick = $wireClick;
        $this->name = $name;
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
