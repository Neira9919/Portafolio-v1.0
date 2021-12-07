<?php

namespace App\Http\Livewire;

use App\Models\Contacto;
use Livewire\Component;
use Livewire\WithPagination;
class AdmContactos extends Component
{
    use WithPagination;
    public $search;
    public $sort = 'id';
    public $l_amount = 10;
    public $direction = 'desc';

    public function updatingSearch(){
        $this->resetPage();
    }
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
        $contactos = Contacto::where('nombre', 'like', '%' . $this->search . '%')
                        ->orWhere('telefono', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction)
                        ->paginate($this->l_amount);
        
        return view('livewire.adm-contactos')
                    ->with('contactos', $contactos);
    }
}
