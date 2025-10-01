<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotonCrear extends Component
{
    public $ruta;
    /**
     * Create a new component instance.
     */
    public function __construct($ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.boton-crear');
    }
}
