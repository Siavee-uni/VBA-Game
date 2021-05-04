<?php

namespace App\Http\Livewire;

use App\Rules\CompareStrings;
use Illuminate\Http\Request;
use Livewire\Component;

class Tasks extends Component
{
    public $model;
    public $input;
    public $dbCodeBlock;
    public $textarea;
    public $formSubmitted;
    public $message;

    public $exp;
    public $lv;

    public function render()
    {
        return view('livewire.tasks');
    }

    public function mount()
    {
        $this->dbCodeBlock = "Sub HelloWorl";
        /*set exp for lv*/
        $this->exp = 10;
        $this->lv = 0;
        $this->formSubmitted = false;
    }

    public function rules()
    {
        return [
            'dbCodeBlock' => ['required', new CompareStrings()],
        ];
    }

    public function submit()
    {
        $this->validate();

        // increase lv
        $this->exp = $this->exp + 10;
        if ($this->exp >= 100) {
            $this->exp = $this->exp - 100;
            $this->lv = $this->lv + 1;
        }
        // show success message
        $this->formSubmitted = true;

        /*Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);*/
    }


}
