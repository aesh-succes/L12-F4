<x-filament::page>
    <div class="max-w-md">
        {{ $this->form }}

        <div style="margin-top: 30px;">
            <x-filament::button
                type="button"
                wire:click="unlock"
                color="success"
                class="w-full"
            >
                Buka Kunci
            </x-filament::button>
        </div>
    </div>
</x-filament::page>
