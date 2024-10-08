<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;


class AlumnsController extends Controller
{   
    //Creación de nuevo alumno
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre_del_Alumno' => 'required|string',
            'Fecha_de_Nacimiento' => 'required|date',
            'Nombre_del_Padre' => 'required|string',
            'Nombre_de_la_Madre' => 'required|string',
            'Grado' => 'required|integer',
            'Sección' => 'required|string',
            'Fecha_de_Ingreso' => 'required|date',
        ]);
        
        $alumno = Alumno::create($validatedData);
        return response()->json(['message'=>'El alumno ha sido registrado éxitosamente']);
    }

    //Consulta de alumno por grado
    public function showByGrado($grado)
    {
        $alumnos = Alumno::where('grado', $grado)->get();
        return response()->json($alumnos);
    }
}
