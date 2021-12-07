<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function imagenes(){
        return $this->hasMany("App\Models\Imagen");
    }
}
