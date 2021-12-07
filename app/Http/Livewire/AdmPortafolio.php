<?php

namespace App\Http\Livewire;

use App\Models\Imagen;
use App\Models\Proyecto;
use Livewire\Component;
use Livewire\WithPagination;

class AdmPortafolio extends Component
{
    use WithPagination;
    public $search;
    public $sort = 'id';
    public $l_amount = 10;
    public $direction = 'desc';

    public function updatingSearch(){
        $this->resetPage();
    }
    
    protected $listeners = ['render' => 'render'];

    public function order($t_sort){
        //Esto ordena la tabla de acuerdo al valor de las propiedades
        if ($this->sort == $t_sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $t_sort;
            $this->direction = 'asc';
        }
        
    }
    public function render()
    {
        $proyectos = Proyecto::where('nombre', 'like', '%' . $this->search . '%')
                    ->orWhere('tech', 'like', '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->l_amount);

        $fotos = Imagen::all();
        return view('livewire.adm-portafolio')
                    ->with('proyectos', $proyectos)
                    ->with('fotos', $fotos);
    }
}
