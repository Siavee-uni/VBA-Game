<?php

namespace App\View\Components;

use Illuminate\View\Component;

class task extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $codeBlockText;
    public $errors;
    public $formSubmitted;


    public function __construct($codeBlockText,$errors,$formSubmitted)
    {
        $this->codeBlockText = $codeBlockText;
        $this->errors = $errors;
        $this->formSubmitted = $formSubmitted;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task');
    }
}
