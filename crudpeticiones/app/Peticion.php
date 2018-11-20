<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
     protected $fillable = ['nombre', 'documento', 'correo','direccion','telefono','motivo'];
}
