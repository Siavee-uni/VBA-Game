<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CodeBlock extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $codeBlocks = [];
    public $submittedCode = [];
    public function __construct($codeBlocks,$submittedCode)
    {
        $this->codeBlocks = $codeBlocks;
        $this->submittedCode = $submittedCode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.code-block');
    }
}
