<?php

namespace App\Http\Livewire;

use App\Models\Challenge;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class ChallengeController extends Component
{
    public object $challenge;
    public $user;
    public int $exp;

    public array $codeBlockSolution = [];
    public array $submittedCodeBlocks = [];

    public bool $formSubmitted;

    public function render()
    {
        return view('livewire.challenge-controller');
    }

    #[NoReturn] public function mount($id)
    {
        $this->challenge = Challenge::find($id);
        $this->user = Auth::User();
        $this->exp = $this->user->exp;
        /*dd($this->user);*/
        // convert string to array
        $this->codeBlockSolution = explode("\n", str_replace("\r", "", $this->challenge->code_blocks_solution));
        $this->codeBlockSolution = $this->shuffle_array($this->codeBlockSolution);
        $this->formSubmitted = false;
    }

    public function submit($formData)
    {
        if (Auth::check()) {
            $this->submittedCodeBlocks = $formData;
            /*dd($this->submittedCode);*/
            if ($this->customValidation($formData)) {
                $this->formSubmitted = true;
            }
        }
        // show success message
        $this->formSubmitted = true;

        if ($this->exp >= 50) {
            $this->exp = $this->exp - 105;
        }
        $this->exp = $this->exp + 50;
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
        return array_values($random);
    }
}
