<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CLIENTE\ClienteController;
use App\Http\Controllers\ADMINISTRADOR\AdmiController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('loginSubmit', [LoginController::class, 'loginSubmit'])->name('loginSubmit');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');;
Route::post('/registerSubmit', [RegisterController::class, 'registerSubmit'])->name('registerSubmit');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['dash.admi'])->group(function () {
        Route::get('administrador/dashboard', [AdmiController::class, 'index'])->name('administrador');
        Route::get('administrador/registro',[AdmiController::class, 'registro'])->name('registro');
        Route::delete('administrador/registro/delete',[AdmiController::class, 'registroDelete'])->name('registro.delete');
        Route::get('administrador/ventaCerrada',[AdmiController::class, 'ventaCerrada'])->name('ventaCerrada');
        Route::get('administrador/ventaActivar',[AdmiController::class, 'ventaActivar'])->name('ventaActivar');
        Route::post('administrador/ventaActivar/activar',[AdmiController::class,'ventaActivarA'])->name('ventaActivar.activar');
    });

    Route::middleware(['dash.cliente'])->group(function () {
        Route::get('cliente/dashboard', [ClienteController::class, 'index'])->name('cliente');
    });
});
