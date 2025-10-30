<?php

use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/api/empleados', [EmpleadoController::class, 'index']);
// Route::post('/api/empleados', [EmpleadoController::class, 'store']);


// php artisan make:migration create_empleados_table --create=empleados
// php artisan db:seed
