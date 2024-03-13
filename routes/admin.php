<?php

use App\Http\Controllers\Admin\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');
Route::resource('clientes', ClientesController::class)->names('admin.clientes');

Route::resource('roles', RoleController::class)->names('admin.roles');