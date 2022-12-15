<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vignette;
use App\Http\Controllers\VignetteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/landing', [ VignetteController::class, 'index']);

Route::get('/vignettes', [ VignetteController::class, 'manage']);

Route::get('show/{id}', [ VignetteController::class, 'show']);

Route::get('create', [ VignetteController::class, 'create']);

Route::get('edit/{id}', [ VignetteController::class, 'edit']);

Route::get('delete/{id}', [ VignetteController::class, 'delete']);







Route::fallback(function () {
    return 'Hm, comment avez-vous atterri ici ?';
});