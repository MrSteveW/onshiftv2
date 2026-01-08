<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StaffmemberController;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/staff', [StaffmemberController::class, 'index']);
Route::get('/staff/create', [StaffmemberController::class, 'create']);
Route::get('staff/{staffmember}/edit', [StaffmemberController::class, 'edit']);
Route::patch('staff/{staffmember}', [StaffmemberController::class, 'update']);
Route::get('/staff/{staffmember}', [StaffmemberController::class, 'show']);
Route::delete('/staff/{staffmember}', [StaffmemberController::class, 'destroy']);
Route::post('/staff', [StaffmemberController::class, 'store']);

// Route::resource('staff', StaffmemberController::class);
