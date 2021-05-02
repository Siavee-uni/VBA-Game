<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tasks extends Component
{
    public $model;
    public $input;
    public $codeBlockInput;
    public $textarea;
    public $formSubmitted;

    public $exp;
    public $lv;

    public function render()
    {
        return view('livewire.tasks');
    }

    public function mount()
    {
        $this->codeBlockInput = "
            Sub HelloWorld()

            End Sub
        ";
        /*set exp for lv*/
        $this->exp = 10;
        $this->lv = 0;
        $this->formSubmitted = false;
    }

    public function submit()
    {
        $rules = [
        'codeBlockInput' => 'required|min:2',
        ];

        $customMessages = [
            'min' => 'The field is required.'
        ];
        $this->validate($rules, $customMessages);

        // increase lv
        $this->exp = $this->exp + 10;
        if ($this->exp >= 100) {
            $this->exp = $this->exp - 100;
            $this->lv = $this->lv + 1 ;
        }
        // show success message
        $this->formSubmitted = true;

        /*Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);*/
    }


}
