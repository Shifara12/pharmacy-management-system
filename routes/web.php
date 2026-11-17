<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\CustomerController;
Route::get('/', function () {
    return view('login');
});

Route::resource('medicines', MedicineController::class);
Route::resource('customers', CustomerController::class);
