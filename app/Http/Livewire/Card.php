<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public string $title;
    public string $content;
    public string $buttonText;
    public $pageId;
    public string $route;

    public function render()
    {
        return view('livewire.card');
    }

    public function mount($title, $content, $buttonText, $route, $pageId = null)
    {
        $this->title = $title;
        $this->buttonText = $buttonText;
        $this->content = $content;
        $this->route = $route;
        $this->pageId = $pageId;
    }

    public function redirectTo()
    {
        if (!$this->pageId) {
            redirect(route($this->route));
        }
        redirect(route($this->route, ['id' => $this->pageId]));
    }
}
