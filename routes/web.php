<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/users', [AdminController::class, 'index'])->name('users');
Route::get('/admin/users/create', [AdminController::class, 'create'])->name('users-create');
Route::post('/admin/users/create', [AdminController::class, 'store'])->name('users-store');
Route::get('/admin/users/edit', [AdminController::class, 'update']);
Route::delete('/admin/users/delete', [AdminController::class, 'delete']);
