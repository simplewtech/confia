<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardHeader extends Component
{
    public $tipo, $titulo, $icono, $ruta, $bg;
    /**
     * Create a new component instance.
     */
    public function __construct($tipo, $titulo, $icono, $ruta, $bg)
    {
        $this->tipo = $tipo;
        $this->titulo = $titulo;
        $this->icono = $icono;
        $this->ruta = $ruta;
        $this->bg = $bg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-header');
    }
}
