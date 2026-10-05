<?php

use App\Http\Controllers\DescriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DescriptionController::class, 'index'])->name('description.index');
Route::post('/', [DescriptionController::class, 'generate'])->name('description.generate');