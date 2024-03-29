<?php

use App\Http\Controllers\storeController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

Route::get('/', [storeController::class, 'index']);
