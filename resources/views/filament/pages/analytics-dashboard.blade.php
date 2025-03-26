<x-filament-panels::page>
    <x-filament::grid :default="3" class="gap-4">
        @foreach ($this->getWidgets() as $widget)
            <x-filament::grid.column class="w-full">
                <div class="h-full">
                    @livewire($widget)
                </div>
            </x-filament::grid.column>
        @endforeach
    </x-filament::grid>
</x-filament-panels::page>
