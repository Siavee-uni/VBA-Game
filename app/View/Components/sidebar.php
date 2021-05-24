<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{

    public $exp;
    public $lv;
    public function __construct($exp = 0,$lv = 0)
    {
        $this->exp = $exp;
        $this->lv = $lv;
    }

    public function render()
    {
        return view('components.sitebar');
    }
}
