<?php

namespace App\Livewire;

use App\Models\Screen;
use Livewire\Component;

class ScreenComponent extends Component
{
    public $screens;

    public function mount()
    {
        $this->screens = Screen::get();
    }

    public function render()
    {
        return view('livewire.screen-component');
    }
}
