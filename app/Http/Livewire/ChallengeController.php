<?php

namespace App\Http\Livewire;

use App\Models\Challenge;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChallengeController extends Component
{
    public object $challenge;
    public $user;
    public int $userExpBar;

    public array $codeBlocks = [];
    public array $submittedCodeBlocks = [];

    public bool $formSubmitted;
    public $expGained;

    public function render()
    {
        return view('livewire.challenge-controller');
    }

    public function mount($id)
    {
        $this->challenge = Challenge::find($id);
        $this->user = User::find(Auth::id());
        $this->userExpBar = $this->user->exp;

        $this->codeBlocks = shuffle_array(stringToArray($this->challenge->code_blocks_solution));
        /*if (!empty($this->user->challenges[0]->pivot->complete)) {
            $this->formSubmitted = $this->user->challenges[0]->pivot->complete;
            return;
        }*/
        $this->formSubmitted = false;
        $this->expGained = false;
    }

    public function submit($formData)
    {

        if (Auth::check()) {
            $this->submittedCodeBlocks = $formData;

            if ($this->customValidate($formData)) {
                $this->formSubmitted = true;
                if ($this->user->challenges[0]->pivot->complete) {
                    $this->expGained = true;
                    return;
                }

                if ($this->userExpBar + $this->challenge->exp >= 100) {
                    $this->userExpBar = $this->userExpBar - 100;
                }

                $this->userExpBar += $this->challenge->exp;

                $this->user->level += 1 ;
                $this->user->exp += $this->challenge->exp;
                $this->user->save();
                $this->user->challenges()->attach($this->challenge->id,['complete' => true]);
            }
        }
    }

    function customValidate($input): bool
    {
        if (!empty($input)) {
            $solution = tolowerRemoveSpace(stringToArray($this->challenge->code_blocks_solution));

            $inputValues = array_values($input); // normalise array
            $inputValues = tolowerRemoveSpace($inputValues);

            foreach ($inputValues as $key => $value) {
                if (!isset($solution[$key])) {
                    $this->addError('console-error', 'Dein Code scheint nicht das zu tuhen was er soll.');
                    return false;
                }
                if ($value !== $solution[$key]) {
                    $this->addError('console-error', 'Dein Code scheint nicht das zu tuhen was er soll.
                    probiere es doch nochmal. Zeile ' . $key + 1);
                    return false;
                }
            }
            if (count($solution) ==! count($inputValues)) {
                $this->addError('console-error', 'Dein Code scheint nicht das zu tuhen was er soll.');
                return false;
            }
            if (count($solution) !== count($inputValues)) {
                $this->addError('console-error', 'Dein Code scheint nicht das zu tuhen was er soll.');
                return false;
            }
            return true;
        }
        $this->addError('console-error', 'Du scheinst noch nichts gemacht zu haben. Versuch es nochmal.');
        return false;
    }
}
