<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', [ApiController::class, 'getAPI']);

// Route::get('/', function () {
//     return view('welcome');
// });
