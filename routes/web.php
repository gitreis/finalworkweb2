<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;

Route::get('/', function () {
    return view('cep');
});

// Route::post('cep', function () {
//   return view('api');
// });

Route::post('cep', [CepController::class, 'request']);
