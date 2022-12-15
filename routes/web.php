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

Route::get('/', [ VignetteController::class, 'index']);

Route::get('/vignettes', [ VignetteController::class, 'manage']);

Route::get('show/{id}', [ VignetteController::class, 'show']);

Route::get('create', [ VignetteController::class, 'create'])->name('create');
Route::post('create', [ VignetteController::class, 'store'])->name('store');

Route::get('edit/{id}', [ VignetteController::class, 'edit'])->name('edit');
Route::post('edit/{id}', [ VignetteController::class, 'update'])->name('update');

Route::delete('delete/{id}', [ VignetteController::class, 'destroy']);







Route::fallback(function () {
    return 'Hm, comment avez-vous atterri ici ?';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
