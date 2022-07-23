<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\EmissionPointController;
use App\Http\Controllers\Admin\EstablishmentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TransmitterController;
use App\Http\Controllers\Admin\TypeIdController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['auth']], function()
{
    Route::resource('identificaciones', TypeIdController::class)->names('identificaciones');
    Route::resource('permissions', PermissionController::class)->names('permissions');
    Route::resource('users', UserController::class)->names('users');
    Route::resource('roles', RoleController::class)->names('roles');
    Route::resource('clients', ClientController::class)->names('clients');
    Route::resource('plans', PlanController::class)->names('plans');
    Route::resource('transmitters', TransmitterController::class)->names('transmitters');
    Route::resource('establishments', EstablishmentController::class)->names('establishments');
    Route::resource('emission_points', EmissionPointController::class)->names('emission_points');
});