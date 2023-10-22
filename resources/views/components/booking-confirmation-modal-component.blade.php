<x-modal wire:model.defer="simpleModal">
    <x-card title="{{ __('Booking Confirmation') }}">
        <p class="text-gray-600">
            {{ __('Are you sure you want to book this tickets ?') }}
        </p>
        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <x-button red label="{{ __('Cancel') }}" x-on:click="close" />
                <x-button sky label="{{ __('Confirm') }}" x-on:click="close" {{ $attributes }}/>
            </div>
        </x-slot>
    </x-card>
</x-modal>