<?php

use App\Http\Controllers\Employee\AuthController;
use App\Http\Controllers\Employee\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:employee', 'PreventBackHistory'])->group(function() {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('employee.login');
    Route::post('/auth/login-submit', [AuthController::class, 'login_submit'])->name('employee.login-submit');
});

Route::middleware(['auth:employee', 'PreventBackHistory'])->group(function() {
    Route::get('/', [EmployeeController::class, 'home'])->name('employee.home');
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('employee.logout');
    Route::get('/my-kpi', [EmployeeController::class, 'my_kpi'])->name('employee.my-kpi');
    Route::get('/employee-details', [EmployeeController::class, 'employee_details'])->name('employee.employee-details');
});
