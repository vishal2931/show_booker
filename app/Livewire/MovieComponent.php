<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class MovieComponent extends Component
{
    public $movies;

    public function mount()
    {
        $this->movies = Movie::all();
    }

    public function render()
    {
        return view('livewire.movie-component');
    }
}
