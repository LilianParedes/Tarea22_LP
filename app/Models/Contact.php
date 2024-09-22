<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact'; // Nombre de la tabla
    protected $fillable = ['nombre', 'email', 'publicidad', 'mensaje']; // Columnas que pueden ser llenadas
}

