<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProfileCard extends Component
{
    public $user;
    public $exp;
    public function __construct($user,$exp)
    {
        $this->user = $user;
        $this->exp = $exp;
    }

    public function render()
    {
        return view('components.profile-card');
    }
}
