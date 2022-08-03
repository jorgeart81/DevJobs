<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante'>
    {{-- Titulo Vacante --}}
    <div>
        <x-label for="titulo" :value="__('Título Vacante')" />

        <x-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')"
            placeholder="Título Vacante" />

        @error('titulo')
            <livewire:mostrar-alerta :message=$message />
        @enderror
    </div>
    {{-- Salario Mensual --}}
    <div>
        <x-label for="salario" :value="__('Salario Mensual')" />

        <select id="salario" wire:model="salario"
            class="w-full rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
            <option value="">-- Seleccionar --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        @error('salario')
            <livewire:mostrar-alerta :message=$message />
        @enderror

    </div>
    {{-- Categoria --}}
    <div>
        <x-label for="categoria" :value="__('Categoría')" />

        <select id="categoria" wire:model="categoria"
            class="w-full rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
            <option value="">-- Seleccionar --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>

        @error('categoria')
            <livewire:mostrar-alerta :message=$message />
        @enderror

    </div>
    {{-- Empresa --}}
    <div>
        <x-label for="empresa" :value="__('Empresa')" />

        <x-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />

        @error('empresa')
            <livewire:mostrar-alerta :message=$message />
        @enderror

    </div>
    {{-- Último día para postularse --}}
    <div>
        <x-label for="ultimo_dia" :value="__('Último Día para postularse')" />

        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" />

        @error('ultimo_dia')
            <livewire:mostrar-alerta :message=$message />
        @enderror

    </div>
    {{-- Descripción del puesto --}}
    <div>
        <x-label for="descripcion" :value="__('Descripción Puesto')" />

        <textarea wire:model="descripcion" id="descripcion"
            class="w-full h-72 rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
            placeholder="Descripción del puesto"></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message=$message />
        @enderror

    </div>
    {{-- Imagen --}}
    <div>
        <x-label for="imagen" :value="__('Imagen')" />

        <x-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva" accept="image/*" />

        <div class="my-5 w-80">
            <x-label :value="__('Imagen Actual')" />

            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante '. $titulo }}">
            @if ($imagen_nueva)
                Imagen Nueva:
                <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="imagen">
            @endif
        </div>
        @error('imagen_nueva')
            <livewire:mostrar-alerta :message=$message />
        @enderror

    </div>
    <x-button class="flex items-center justify-end mt-4">
        {{ __('Guardar Cambios') }}
    </x-button>

</form>
