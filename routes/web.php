<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return 'Welcome to Employee Management System';
});

Route::get('/employee/{name}', function($name) {
    return "Hello, $name. Welcome to the Employee Management System!";
});

Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees/store', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{id}/details', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('employees.show');
