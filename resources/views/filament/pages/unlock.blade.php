<x-filament::page>
    <form wire:submit.prevent="unlock" class="space-y-4 max-w-md">
        {{ $this->form }}

        <x-filament::button type="submit" color="success">
            Buka Kunci
        </x-filament::button>
    </form>
</x-filament::page>
