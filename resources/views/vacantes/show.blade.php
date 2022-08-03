<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($vacante->titulo) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <livewire:mostrar-vacante :vacante="$vacante" />
        </div>
    </div>
</x-app-layout>
