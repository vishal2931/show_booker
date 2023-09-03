<?php

namespace App\Livewire;

use App\Models\BookedSlot;
use App\Models\Screen;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SlotComponent extends Component
{
    #[Rule('array', message: 'Invalid seat selection')]
    #[Rule('required', message: 'Please select at least one seat')]
    public $slots = [];

    public $screen,$booked_slots;


    public function mount(Screen $screen)
    {
        $this->screen = $screen;
        $this->booked_slots = BookedSlot::where('screen_id',$screen->id)->get();
    }

    public function render()
    {
        return view('livewire.slot-component');
    }

    public function save()
    {
        $this->validate();

        $data = [];
        collect($this->slots)->each(function($value) use(&$data){
            
            $data[] = [
                'screen_id' => $this->screen->id,
                'slot' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        });
        BookedSlot::insert($data);
        $this->reset('slots');
        $this->booked_slots = BookedSlot::where('screen_id',$this->screen->id)->get();
    }
}
