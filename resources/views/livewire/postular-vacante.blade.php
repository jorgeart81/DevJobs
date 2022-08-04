<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center rounded">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante.</h3>

    @if (session()->has('mensaje'))
        <p class="uppercase rounded border border-green-600 bg-green-100 text-green-600 font-semibold text-sm p-2 my-5">
            {{ session('mensaje') }}</p>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5">
            <div class="mb-4">
                <x-label for="cv" :value="__('Curriculum u Hoja de Vida (PDF)')" />
                <x-input id="cv" type="file" accept=".pdf" wire:model="cv" class="block mt-1 w-full" />
            </div>
            @error('cv')
                <div class="pb-4">
                    <livewire:mostrar-alerta :message="$message" />
                </div>
            @enderror
            <x-button class="w-full justify-center">
                {{ __('Postularme') }}
            </x-button>
        </form>
    @endif

</div>
