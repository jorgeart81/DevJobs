<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 text-sm font-semibold p-2 my-3">
                {{ session('mensaje') }}
            </div>
        @endif
        <livewire:mostrar-vacantes>
    </div>
</x-app-layout>
