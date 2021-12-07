<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = "imagenes";

    //Relacion uno a muchos (inversa)
    public function proyecto(){
        return $this->belongsTo("App\Models\Proyecto");
    }

}
