<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('todo')->group(function () {
    Route::controller(TodoController::class)->group(function () {
        Route::get('/', 'all');
        Route::post('/', 'store');
        Route::get('/{id}', 'findById');
        Route::put('/done/{id}', 'setDone');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'remove');
    });
});