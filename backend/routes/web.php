<?php

use App\Http\Controllers\VegetableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VegetableController::class, "index"])->name("home");
Route::get('/vegetables', [VegetableController::class, "table"])->name("vegetable.table");
Route::get('/vegetables/{id}', [VegetableController::class, "show"])->whereNumber("id")->name("vegetable.show");
