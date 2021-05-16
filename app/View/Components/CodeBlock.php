<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CodeBlock extends Component
{
    public array $codeBlocks;
    public array $submittedCode;

    public function __construct($codeBlocks,$submittedCode)
    {
        $this->codeBlocks = $codeBlocks;
        $this->submittedCode = $submittedCode;
    }

    public function render()
    {
        return view('components.code-block');
    }
}
