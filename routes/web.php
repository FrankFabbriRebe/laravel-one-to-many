<?php

use Illuminate\Support\Facades\Route;

// include controllers
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;

Route::get('/', [ProjectsController::class, 'index']);
