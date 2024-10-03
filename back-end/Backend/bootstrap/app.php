<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
//use App\Http\Middleware;



return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->VerifyCsrfToken(except:[
            'stripe/*',
            'http://localhost:8000/*',
            'http://localhost:8000/api/*'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        
    })->create();
