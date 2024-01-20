<?php

namespace App\Livewire;

use App\Models\BookedSlot;
use App\Models\Movie;
use App\Models\Screen;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SlotComponent extends Component
{
    #[Rule('array', message: 'Invalid seat selection')]
    #[Rule('required', message: 'Please select at least one seat')]
    public $slots = [];

    public Screen $screen;

    public Movie $movie;

    public $booked_slots;

    public $simpleModal;

    public function mount(Movie $movie, Screen $screen)
    {
        $this->screen = $screen;
        $this->movie = $movie;

        $this->booked_slots = BookedSlot::where(['screen_id' => $screen->id, 'movie_id' => $movie->id])->get();

    }

    public function render()
    {
        return view('livewire.slot-component');
    }

    public function save()
    {
        $this->validate();
        $data = [];
        $book_slots_id = $this->booked_slots->pluck('slot')->toArray();

        collect($this->slots)->each(function ($value) use (&$data, $book_slots_id) {

            if (! in_array($value, $book_slots_id)) {
                $data[] = [
                    'screen_id' => $this->screen->id,
                    'movie_id' => $this->movie->id,
                    'slot' => $value,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

        });
        BookedSlot::insert($data);
        $this->reset('slots');
        $this->booked_slots = BookedSlot::where(['screen_id' => $this->screen->id, 'movie_id' => $this->movie->id])->get();
    }
}
