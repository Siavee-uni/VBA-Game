<?php

namespace App\Http\Livewire;

use App\Models\Challenge;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class ChallengeController extends Component
{
    public object $challenge;
    public array $codeBlockSolution = [];
    public int $lv;
    public int $exp;
    public bool $formSubmitted;
    public array $submittedCodeBlocks = [];

    public function render()
    {
        return view('livewire.challenge-controller');
    }

    #[NoReturn] public function mount($id)
    {
        $this->challenge = Challenge::find($id);
        // convert string to array
        $this->codeBlockSolution = explode("\n", str_replace("\r", "", $this->challenge->code_blocks_solution));
        $this->codeBlockSolution = array_values($this->shuffle_array($this->codeBlockSolution));

        $this->exp = $this->challenge->exp;
        $this->formSubmitted = false;
        $this->lv = 0;
    }

    public function submit($formData)
    {
        $this->submittedCodeBlocks = $formData;
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
            $newDbCodeBlock = $this->trim($this->codeBlockSolution);

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
