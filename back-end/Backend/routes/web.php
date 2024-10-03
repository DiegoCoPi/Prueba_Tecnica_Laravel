<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnsController;


Route::middleware('api')->post('/crear-alumno', [AlumnsController::class, 'store']);
