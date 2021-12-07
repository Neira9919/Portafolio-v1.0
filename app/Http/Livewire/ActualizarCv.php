<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ActualizarCv extends Component
{
    use WithFileUploads;

    public $open = false;

    public $cv;

    protected $rules = [
        'cv' => 'required|file|max:5120'
    ];
    protected $messages = [
        'cv.required' => 'Se necesita subir un nuevo cv',
        'cv.max' => 'Solo se admiten archivos hasta 5 Mb.',
    ];

    public function CV_upload()
    {
        $this->validate();
        if (Storage::disk('public')->exists('cv_sebastian_neira.pdf')) {
            Storage::disk('public')->delete('cv_sebastian_neira.pdf');
            $this->cv->storeAs('', 'cv_sebastian_neira.pdf', 'public');
            $this->cerrar();
        } else {
            $this->cv->storeAs('', 'cv_sebastian_neira.pdf', 'public');
            $this->cerrar();
        }
    }
    public function cerrar()
    {
        $this->reset('cv');
        $this->open = false;
    }
    public function updated($property)
    {
        $this->validateOnly($property);
    }


    public function render()
    {

        return view('livewire.actualizar-cv');
    }
}
