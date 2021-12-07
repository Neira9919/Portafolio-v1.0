<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyecto;
use App\Models\Imagen;
use Livewire\WithFileUploads;

class CreateProyecto extends Component
{
    use WithFileUploads;

    public $open = false;

    public $nombre, $descripcion, $url, $tech, $img;

    protected $rules = [
        'nombre' => 'required|max:100|unique:proyectos,nombre',
        'descripcion' => 'required',
        'url' => 'required|max:200',
        'tech' => 'required',
        'img' => 'required|image|max:5120'
    ];
    protected $messages = [
        'nombre.required' => 'El campo Nombre no puede estar vacio.',
        'nombre.max' => 'El campo Nombre excede el maximo de caracteres.',
        'nombre.unique' => 'Ya existe un proyecto con este nombre.',
        'tech.required' => 'El campo Tecnologias no puede estar vacio.',
        'url.required' => 'El campo Url no puede estar vacio.',
        'url.max' => 'Maximo 200 Caracteres',
        'descripcion.required' => 'El campo Descripcion no puede estar vacio.',
        'img.required' => 'Se necesita subir una imagen para el proyecto.',
        'img.max' => 'Solo se admiten archivos hasta 5 Mb.',
    ];

    public function updated($property){
        $this->validateOnly($property);
    } 


    public function submit(){
        $this->validate();
        //Guardar proyecto en BD
        $proyecto = new Proyecto();
        $proyecto->nombre = $this->nombre;
        $proyecto->descripcion = $this->descripcion;
        $proyecto->url = $this->url;
        $proyecto->tech = $this->tech;
        $proyecto->save();
        //guardar img
        $imagen = new Imagen();
        $img_url = $this->img->store('proyectos');
        $imagen->alt = $proyecto->nombre;
        $imagen->url = $img_url;
        $imagen->proyecto_id = $proyecto->id;
        $imagen->save();
        $this->emitTo('adm-portafolio','render');
        $this->cerrar();  
    }
    public function cerrar(){
        $this->reset('nombre','url', 'descripcion', 'tech', 'img');
        $this->open = false;
    }
    public function render()
    {
        return view('livewire.create-proyecto');
    }
}
