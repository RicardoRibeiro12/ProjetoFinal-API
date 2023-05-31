<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObsController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AtuadorController;
use App\Http\Controllers\GatewayController;
use App\Http\Controllers\CulturaController;
use App\Http\Controllers\ControladorController;


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
    if (Auth::check()) {
        return redirect()->route('home');
    } else {
        return view('auth.login');
    }
})->name('root');

Route::get('/', [CulturaController::class,'index'])->name('home')->middleware('auth');

/*
Route::get('/home', function () {
    return view('culturas.index');
})->name('home')->middleware('auth');
*/


/*
Route::get('/login', function () {
    return view('login');
});*/




Route::get('/culturas', [CulturaController::class,'index']);

Route::get('/sensores_atuadores/{id}', [CulturaController::class,'get_sensores_atuadores']);

Route::get('/regras', function () {
    return view('regras');
});

Route::get('/addcultura', function () {
    return view('addcultura');
});

Route::post('cultura', [CulturaController::class, 'store']);

Auth::routes();

