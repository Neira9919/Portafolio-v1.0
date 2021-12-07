<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AutoContactoMailable;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacto;

class ContactosController extends Controller
{
    public function index()
    {
        return view('contactos.index');
    }

}
