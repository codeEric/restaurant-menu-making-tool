<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuItemController;

Route::middleware('auth')->group(
  function () {
    Route::get('/', [MenuController::class, 'index']);
    Route::resource('/dashboard/menu', MenuController::class)->except('show');
    Route::delete('/dashboard/menu/menu-items/{menu}/{menuItem}', [MenuItemController::class, 'destroy']);
    Route::post('/dashboard/menu/menu-items/{menu}', [MenuItemController::class, 'store']);
    Route::put('/dashboard/menu/menu-items/{menu}/{menuItem}', [MenuItemController::class, 'update']);
    Route::get('/dashboard/menu/menu-items/{menu}', [MenuItemController::class, 'index']);
    Route::get('/dashboard/menu/menu-items/{menu}/create', [MenuItemController::class, 'create']);
    Route::get('/dashboard/menu/menu-items/{menu}/{menuItem}/edit', [MenuItemController::class, 'edit']);
  }
);


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard-login', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
