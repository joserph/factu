<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TypeIdController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['auth']], function()
{
    Route::resource('identificaciones', TypeIdController::class)->names('identificaciones');
    Route::resource('permissions', PermissionController::class)->names('permissions');
    Route::resource('users', UserController::class)->names('users');
    Route::resource('roles', RoleController::class)->names('roles');
});