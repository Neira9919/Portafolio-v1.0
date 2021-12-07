<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\AutoContactoMailable;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacto;

class FormContacto extends Component
{
    public $nombre, $email, $tel, $mensaje;

    protected $rules = [
        'nombre' => 'required|max:100',
        'email' => 'required|email|unique:contactos,email',
        'tel' => 'required|max:15',
        'mensaje' => 'required'
    ];
    protected $messages = [
        'nombre.required' => 'El campo Nombre no puede estar vacio.',
        'nombre.max' => 'El campo Nombre excede el maximo de caracteres.',
        'email.required' => 'El campo Email no puede estar vacio.',
        'email.email' => 'Ingrese un Email Valido',
        'email.unique' => 'Ya he recibido un email con este correo, respondere a la brevedad.',
        'tel.required' => 'El campo Telefono no puede estar vacio.',
        'tel.max' => 'Maximo 15 Caracteres',
        'mensaje.required' => 'El campo Mensaje no puede estar vacio.',
    ];

    public function updated($property){
        $this->validateOnly($property);
    } 


    public function submit(){
        $this->validate();
        //Guardar en BD
        $contacto = new Contacto();
        $contacto->nombre = $this->nombre;
        $contacto->telefono = $this->tel;
        $contacto->email = $this->email;
        $contacto->desc = $this->mensaje;
        //Correo con Formulario
        $correo = new ContactoMailable($contacto);
        Mail::to('neira9919@gmail.com')->send($correo);
        //Correo automatico
        $auto_correo = new AutoContactoMailable;
        Mail::to($this->email)->send($auto_correo);
        $contacto->save();
        $this->clear();
    }
    public function clear(){
        $this->reset('nombre','email', 'tel', 'mensaje');
    }

    public function render()
    {
        return view('livewire.form-contacto')->layout('layouts.contacto');
    }
}
