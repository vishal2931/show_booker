<div class="flex justify-center items-center">
    <div class="w-full mx-auto py-4">
        <form action="#" method="POST" wire:submit="save">
            <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-xl animate-fade-in-down">
                <h1 class="text-2xl font-semibold mb-1 text-center">{{ $screen->name }}</h1>
                <h1 class="text-1xl font-semibold mb-3 text-center">{{ __('Select Seats') }}</h1>
                <!-- Seat Map Container -->
                <div class="grid grid-cols-20 gap-1 p-1">  
                    <!-- Generate Seats -->
                    @for ($row = 1; $row <= 10; $row++)
                        <div class="flex items-center justify-between flex-wrap">
                            @foreach( range('A', 'T') as $element)
                                <div class="p-0.5">
                                    @if($booked_slots->where('slot',$element.$row)->count())
                                        <label for="seat-{{ $row }}{{ $loop->iteration }}" class="h-10 w-10 relative bg-gray-300 border-gray-300 border rounded-md transform flex justify-center items-center">
                                            {{ $element }}{{ $row }}
                                        </label>
                                    @else
                                        <input wire:model.live='slots' type="checkbox" id="seat-{{ $row }}{{ $loop->iteration }}" class="absolute opacity-0 w-full h-full cursor-pointer hidden peer" value="{{ $element }}{{ $row }}">
                                        <label for="seat-{{ $row }}{{ $loop->iteration }}" class="text-gray-700 h-10 w-10 relative border-green-400 border rounded-md transform hover:scale-125 hover:bg-green-400 hover:border-white transition-transform flex justify-center items-center peer-checked:bg-green-400 cursor-pointer">
                                            {{ $element }}{{ $row }}
                                        </label>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endfor
                </div>
                <!-- Number of Tickets Input -->
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">{{ __('Selected Tickets') }} : {{ count($slots) }}</label>
                    @error('slots')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Book Button -->
                <div class="mt-6 text-center">
                    <button class="bg-cyan-400 text-white px-6 py-3 rounded-md hover:bg-cyan-500 focus:outline-none focus:ring focus:ring-cyan-300 focus:ring-opacity-50 disabled:bg-cyan-200" type="button" onclick="$openModal('simpleModal')"  {{ count($slots) == 0 ? 'disabled' : '' }}>
                        {{ __('Book Tickets') }}
                    </button>
                </div>
            </div>
            <x-booking-confirmation-modal-component wire:click='save'/>
        </form>
    </div>
</div>
<script>
    document.addEventListener('livewire:initialized', () => {
       @this.on('ticket-booked', (event) => {
            
       });
    });
</script>