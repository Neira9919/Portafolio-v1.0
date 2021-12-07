<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DescargarCv extends Component
{
    public function CV()
    {
        return Storage::disk('public')->download('cv_sebastian_neira.pdf');
    }
    public function render()
    {
        return view('livewire.descargar-cv');
    }
}
