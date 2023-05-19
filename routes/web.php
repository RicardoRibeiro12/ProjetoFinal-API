<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CulturaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});



Route::get('/culturas', [CulturaController::class,'index']);

Route::get('/sensores_atuadores/{id}', [CulturaController::class,'get_sensores_atuadores']);

Route::get('/regras', function () {
    return view('regras');
});
