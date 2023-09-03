<div class="flex justify-center items-center">
    <div class="w-full mx-auto py-4">
        <form action="#" method="POST" wire:submit="save">
            <div class="max-w-6xl mx-auto">
                <h1 class="text-2xl font-semibold mb-6 text-center text-white">{{ __('Select Screen') }}</h1>
                <div class="grid grid-cols-2">
                    @foreach ($screens as $screen)
                        <div class="p-3 my-3">
                            <a wire:navigate href="{{ route('livewire.slot',['screen' => $screen->id]) }}" class="h-40 text-white bg-white text-2xl rounded-lg shadow-xl p-3 cursor-pointer transition ease-in-out delay-100 flex items-center justify-center hover:text-white hover:-translate-y-1 hover:scale-105 duration-300 bg-gradient-to-r from-violet-500 to-fuchsia-500 hover:bg-gradient-to-r hover:from-sky-500 hover:to-indigo-500 ">
                                {{ $screen->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</div>
