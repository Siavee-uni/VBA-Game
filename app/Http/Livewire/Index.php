<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
    public function redirectTo($route)
    {
        return redirect(route($route));
    }

}
