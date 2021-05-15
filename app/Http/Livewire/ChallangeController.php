<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChallangeController extends Component
{
    public $dbCodeBlocks = [];
    public $codeBlocks = [];
    public $lv;
    public $exp;
    public $formSubmitted;
    public $submittedCode = [];

    public function render()
    {
        return view('livewire.challange-controller');
    }

    public function mount()
    {
        $this->dbCodeBlocks = [
            'Sub DoWhileLoop()',
            'Dim i As Integer',
            'For n = 1 To 10',
            'MsgBox n',
            'Next n',
            'End Sub',
        ];
        $this->codeBlocks = array_values($this->shuffle_array($this->dbCodeBlocks));
        $this->formSubmitted = false;
        /*set exp for lv*/
        $this->exp = 10;
        $this->lv = 0;
    }

    public function submit($formData)
    {
        $this->submittedCode = $formData;
        /*dd($this->submittedCode);*/
        if ($this->customValidation($formData)) {
            $this->formSubmitted = true;
        }
        // increase lv
        /*$this->exp = $this->exp + 10;
        if ($this->exp >= 100) {
            $this->exp = $this->exp - 100;
            $this->lv = $this->lv + 1;
        }
        // show success message
        $this->formSubmitted = true;*/

        /*Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);*/
    }

    public function trim($data): array
    {
        $trimmedData = [];

        foreach ($data as $value) {
            $value = str_replace(" ", "", $value);
            $value = strtolower($value);
            $trimmedData[] = $value;
        }
        return $trimmedData;
    }

    function customValidation($input): bool
    {
        if (!empty($input)) {
            $newDbCodeBlock = $this->trim($this->dbCodeBlocks);

            $inputValues = array_values($input); // normalise array
            $inputValues = $this->trim($inputValues);
            /*dd($newDbCodeBlock, $inputValues);*/
            foreach ($inputValues as $key => $value) {
                if ($value !== $newDbCodeBlock[$key]) {
                    $this->addError('console-error', 'Dein Code scheint nicht das zu tuhen was er soll.
                probiere es doch nochmal. Zeile ' . $key + 1);
                    return false;
                }
            }
            return true;
        }
        $this->addError('console-error', 'Du scheinst noch nichts gemacht zu haben. Versuch es nochmal.');
        return false;
    }

    public function shuffle_array($array): array
    {
        if (!is_array($array)) return $array;

        $keys = array_keys($array);
        shuffle($keys);
        $random = [];
        foreach ($keys as $key) {
            $random[$key] = $array[$key];
        }
        return $random;
    }
}
