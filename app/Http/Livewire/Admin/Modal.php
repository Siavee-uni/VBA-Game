<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Challenge;
use App\Models\Tutorial;
use App\Models\User;
class Modal extends Component
{
    public $isOpen = false;
    public $modelName;
    public $dataId;
    public $data;

    protected $listeners = ['showModal' => 'open', 'closeModal' => 'close'];

    public function open($data = '')
    {
        $this->isOpen = true;
        $this->data = $data;
    }

    public function close()
    {
        $this->isOpen = false;
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.modal');
    }

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

       /* $affected = DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);*/
    }

    protected $rules = [
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'The Email Address cannot be empty.',
    ];
}
