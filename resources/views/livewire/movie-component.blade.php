<div class="flex justify-center items-center">
    <div class="w-full mx-auto py-4">
        <form action="#" method="POST" wire:submit="save">
            <div class="max-w-8xl mx-auto">
                <h1 class="text-2xl font-semibold mb-10 text-center text-white">{{ __('Select Movie') }}</h1>
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center">
                    @foreach ($movies as $movie)
                        {{-- <div class="p-3 my-3">
                            <a wire:navigate href="{{ route('livewire.movie', ['movie' => $movie->id]) }}"
                                class="h-40 text-white bg-white text-2xl rounded-lg shadow-xl p-3 cursor-pointer transition ease-in-out delay-100 flex items-center justify-center hover:text-white hover:-translate-y-1 hover:scale-105 duration-300 bg-gradient-to-r from-violet-500 to-fuchsia-500 hover:bg-gradient-to-r hover:from-sky-500 hover:to-indigo-500">
                                {{ $movie->name }}
                                <img src="{{ getAttachmentUrl($movie->image) }}" alt="" class="h-40">
                            </a>
                        </div> --}}

                        <div
                            class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-80 hover:-translate-y-1 hover:scale-105 duration-300 mb-3 lg:mb-3">
                            <div
                                class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl h-72">
                                <img src="{{ getAttachmentUrl($movie->image) }}" alt="profile-picture" class="w-full h-full" />
                            </div>
                            <div class="p-6 text-center">
                                <h4
                                    class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                    {{ $movie->name }}
                                </h4>
                                <p
                                    class="block font-sans mb-5 text-base antialiased font-medium leading-relaxed text-gray-400 bg-clip-text bg-gradient-to-tr from-blue-gray-600 to-blue-gray-400">
                                    {{ $movie->type }}
                                </p>
                                <a wire:navigate.hover href="{{ route('livewire.screen', ['movie' => $movie->id]) }}"
                                    class="align-middle mt-2 w-auto h-auto select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85]">
                                    {{ __('Book Now') }}</a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</div>
