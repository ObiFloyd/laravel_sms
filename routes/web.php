<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
return view('welcome');
});

// Protected routes by role
Route::middleware(['auth', 'role:SuperAdmin'])->group(function () {
Route::get('/superadmin', [DashboardController::class, 'superAdmin'])->name('superadmin.dashboard');
});

Route::middleware(['auth', 'role:SchoolAdmin'])->group(function () {
Route::get('/schooladmin', [DashboardController::class, 'schoolAdmin'])->name('schooladmin.dashboard');
});

Route::middleware(['auth', 'role:Teacher'])->group(function () {
Route::get('/teacher', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
});

Route::middleware(['auth', 'role:Student'])->group(function () {
Route::get('/student', [DashboardController::class, 'student'])->name('student.dashboard');
});

Route::middleware(['auth', 'role:Parent'])->group(function () {
Route::get('/parent', [DashboardController::class, 'parent'])->name('parent.dashboard');
});

Route::middleware(['auth', 'role:Bursar'])->group(function () {
Route::get('/bursar', [DashboardController::class, 'bursar'])->name('bursar.dashboard');
});