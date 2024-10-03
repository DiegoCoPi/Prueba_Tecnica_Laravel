<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

// Crear un nuevo alumno
Route::post('/crear-alumno', [AlumnoController::class, 'crearAlumno']);

// Consultar alumnos por grado
Route::get('/consultar-alumno/{grado}', [AlumnoController::class, 'consultarPorGrado']);
