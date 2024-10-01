<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Si deseas especificar los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'nombre_del_alumno',
        'fecha_de_nacimiento',
        'nombre_del_padre',
        'nombre_de_la_madre',
        'grado',
        'seccion',
        'fecha_de_ingreso',
    ];
}
