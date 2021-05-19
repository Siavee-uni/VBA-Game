<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RankingController extends Component
{
    public object $user;
    public object $users;

    public function render()
    {
        return view('livewire.ranking-controller');
    }

    public function mount()
    {
        $this->user = User::find(Auth::id());
        $this->users = User::orderBy('level','desc')->get();
        /*dd($this->users);*/
    }

}
