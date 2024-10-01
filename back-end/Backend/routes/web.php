<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnsController;

Route::post('/crear-alumno', [AlumnsController::class, 'store']);
