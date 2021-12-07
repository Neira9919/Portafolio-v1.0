<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyecto;
use App\Models\Imagen;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class EditProyecto extends Component
{
    use WithFileUploads;
    public $proyecto;
    public $open = false;
    public $img, $old_img;

    protected $rules = [
        'proyecto.nombre' => 'required|max:100',
        'proyecto.descripcion' => 'required',
        'proyecto.url' => 'required|max:200',
        'proyecto.tech' => 'required',
        'img' => 'required|image|max:5120'
    ];
    protected $messages = [
        'proyecto.nombre.required' => 'El campo Nombre no puede estar vacio.',
        'proyecto.nombre.max' => 'El campo Nombre excede el maximo de caracteres.',
        'proyecto.nombre.unique' => 'Ya existe un proyecto con este nombre.',
        'proyecto.tech.required' => 'El campo Tecnologias no puede estar vacio.',
        'proyecto.url.required' => 'El campo Url no puede estar vacio.',
        'proyecto.url.max' => 'Maximo 200 Caracteres',
        'proyecto.descripcion.required' => 'El campo Descripcion no puede estar vacio.',
        'img.max' => 'Solo se admiten archivos hasta 5 Mb.',
        'img.required' => 'Img no puede estar vacio.',
        'img.image' => 'El archivo debe ser una imagen.',
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }
    public function mount(Proyecto $proyecto)
    {
        $this->proyecto = $proyecto;
        $this->old_img = $this->find_img($proyecto->id);
    }
    public function submit()
    {
        if (is_null($this->img) == false) {
            $this->validate();
            //Guardar proyecto en BD
            $proyecto = Proyecto::find($this->proyecto->id);
            $proyecto->nombre = $this->proyecto->nombre;
            $proyecto->descripcion = $this->proyecto->descripcion;
            //guardar img nueva
            $old_url = str_replace('storage', 'public', $this->old_img->url);
            $aux_1 = $this->img->store('public/proyectos');
            $new_img_url = str_replace('public', 'storage', $aux_1);
            //acualizar img en BD
            $old_img = Imagen::find($this->old_img->id);
            $old_img->url = $new_img_url;
            Storage::delete($old_url);
            $proyecto->url = $this->proyecto->url;
            $proyecto->tech = $this->proyecto->tech;
            $old_img->save();
            $proyecto->save();
            $this->cerrar();
        } else {
            $this->validate([
                'proyecto.nombre' => 'required|max:100',
                'proyecto.descripcion' => 'required',
                'proyecto.url' => 'required|max:200',
                'proyecto.tech' => 'required',
            ]);
            //Guardar proyecto en BD
            $proyecto = Proyecto::find($this->proyecto->id);
            $proyecto->nombre = $this->proyecto->nombre;
            $proyecto->descripcion = $this->proyecto->descripcion;
            $proyecto->url = $this->proyecto->url;
            $proyecto->tech = $this->proyecto->tech;
            $proyecto->save();
            $this->cerrar();
        }
    }
    public function cerrar()
    {
        $this->reset('img');
        $this->emitTo('adm-portafolio', 'render');
        $this->open = false;
    }
    public function find_img($id)
    {
        $img = Imagen::where('id', $id)->first();
        return $img;
    }
    public function render()
    {
        return view('livewire.edit-proyecto');
    }
}
