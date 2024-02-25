<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIUserController as APIUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [APIUserController::class, 'authenticate']);
    
    Route::get('manageusers', [APIUserController::class, 'manageUsers']);
    Route::post('create-user', [APIUserController::class, 'register']);
    Route::put('edit-user/{id}', [APIUserController::class, 'updateUser']);
    Route::delete('delete-user/{id}', [APIUserController::class, 'deleteUser']);
    Route::get('get-user/{id}', [APIUserController::class, 'getUserById']);
});