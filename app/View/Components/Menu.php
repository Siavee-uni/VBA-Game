<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    public $exp;
    public $lv;
    public function __construct($exp,$lv)
    {
        $this->exp = $exp;
        $this->lv = $lv;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
