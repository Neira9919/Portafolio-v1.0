<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyecto;
use App\Models\Imagen;

class ShowPortafolio extends Component
{
    public function render()
    {
        $proyectos = Proyecto::all();
        $fotos = Imagen::all();
        return view('livewire.show-portafolio')
                    ->with('proyectos', $proyectos)
                    ->with('fotos', $fotos);
    }
}
