<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\Usuario;
use Illuminate\Support\Facades\Route;


Route::get('/',  [ProjectsController::class, 'index'])->name('home');

Route::get('project/{project}', [ProjectsController::class , 'show'])->name('projects.show');

