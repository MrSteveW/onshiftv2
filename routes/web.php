<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StaffmemberController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DutyController;

Route::get('/', [StaffmemberController::class, 'board']);

Route::get('/board', [StaffmemberController::class, 'board']);

// Route::get('/staff', [StaffmemberController::class, 'index']);
// Route::get('/staff/create', [StaffmemberController::class, 'create']);
// Route::get('staff/{staffmember}/edit', [StaffmemberController::class, 'edit']);
// Route::patch('staff/{staffmember}', [StaffmemberController::class, 'update']);
// Route::get('/staff/{staffmember}', [StaffmemberController::class, 'show']);
// Route::delete('/staff/{staffmember}', [StaffmemberController::class, 'destroy']);
// Route::post('/staff', [StaffmemberController::class, 'store']);

Route::resource('staff', StaffmemberController::class);
Route::resource('tasks', TaskController::class);
Route::resource('duties', DutyController::class);