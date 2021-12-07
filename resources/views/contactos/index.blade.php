@extends('layouts.plantilla')
@section('title','Contacto | Sebastian Neira - Programador / Desarrollador web')
@section('estilos')
    
@endsection
@section('content')
    <div class="container mx-auto my-auto"> 
        <div class="grid grid-cols-1">
            <div class="p-4 bg-gray-200 mx-4 my-4 rounded-md"">
                <h1 class="font-ail font-bold text-4xl text-center">Pongamonos en contacto</h1>
                <h2 class="text-kh_clair font-ail font-bold text-xl mt-8">Dime que tienes en mente, me pondre en contacto contigo a la brevedad.<br></h2>
                @livewire('form-contacto')
            </div>
        </div>
    </div>
@endsection