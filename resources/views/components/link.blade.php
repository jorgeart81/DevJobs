@php
$clases = 'text-sm text-gray-500 hover:text-gray-900 font-semibold';
@endphp
<div>
    <a {{ $attributes->merge(['class' => $clases]) }}>
        {{ $slot }}
    </a>
</div>
