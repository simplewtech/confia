<div class="card-header {{ $bg }} text-white">
    <div class="card-toolbar">
        <h3 class="card-title fw-bold"><i class="{{ $icono }} pe-2 fs-2"></i>{{ $titulo }}</h3>
        @if ($tipo == 'list')
            <x-boton-crear ruta="{{ $ruta }}" />
        @else
            <x-boton-volver ruta="{{ $ruta }}" />
        @endif
    </div>
</div>
