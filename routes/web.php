<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/{msg?}', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'post']);