<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/test', fn() => 'OK');

Route::apiResource('post', PostController::class);
