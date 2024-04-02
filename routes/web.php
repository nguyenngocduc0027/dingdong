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

Route::get('/', [AdminController::class, 'home'])->name('/');
Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::prefix('/nhatro')->group(function () {
    Route::get('/', [AdminController::class, 'nhatro'])->name('nhatro');
    // Route::get('/create', [AdminController::class, 'create_nhatro'])->name('create_nhatro');
    Route::post('/add', [AdminController::class, 'add_nhatro'])->name('add_nhatro');
    Route::get('/show/{id}', [AdminController::class, 'show_nhatro'])->name('show_nhatro');
    Route::delete('/delete/{id}', [AdminController::class, 'delete_nhatro'])->name('delete_nhatro');
});
