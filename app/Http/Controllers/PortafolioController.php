<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Imagen;

class PortafolioController extends Controller
{
    public function index(){
        return view('portafolio.proyectos');
    }

}
