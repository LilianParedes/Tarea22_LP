<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/contactos', [ContactoController::class, 'verContactos']);

