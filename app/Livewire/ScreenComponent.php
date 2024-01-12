<?php

namespace App\Livewire;

use App\Models\Movie;
use App\Models\Screen;
use Livewire\Component;

class ScreenComponent extends Component
{
    public $screens;

    public Movie $movie;

    public function mount(Movie $movie)
    {
        $this->screens = Screen::get();
        $this->movie = $movie;
    }

    public function render()
    {
        return view('livewire.screen-component');
    }
}
