<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-2xl font-bold text-center my-10">Mis Notificaciones</h1>
                @forelse ($notificaciones as $notificacion)
                    <div class="p-5 border border-green-200 md:flex md:justify-between md:items-center">
                        <div>
                            <p>Tienes un nuevo candidato en:
                                <span class="font-bold">{{ $notificacion->data['nombre_vacante'] }}</span>
                            </p>
                            <p>
                                <span class="font-bold">{{ $notificacion->created_at->diffForHumans() }}</span>
                            </p>
                        </div>
                        <div class="mt-5 lg:mt-0">
                            <a href="" class="bg-green-500 rounded-lg p-3 text-sm uppercase font-bold text-white">Ver Candidatos</a>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-600">No Hay Notificaciones Nuevas</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
