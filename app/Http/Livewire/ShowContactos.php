<?php

namespace App\Http\Livewire;

use App\Models\Contacto;
use Livewire\Component;

class ShowContactos extends Component
{
    public $contacto;
    public $open = false;

    protected $rules = [
        'contacto.nombre' => 'required|max:100',
        'contacto.desc' => 'required',
        'contacto.telefono' => 'required|max:14',
        'contacto.email' => 'required|email',
        'contacto.created_at' => 'required'
    ];

    public function mount(Contacto $contacto)
    {
        $this->contacto = $contacto;
    }

    public function cerrar()
    {
       // $this->reset('img');
        $this->emitTo('adm-contacto', 'render');
        $this->open = false;
    }
    public function render()
    {
        return view('livewire.show-contactos');
    }
}
