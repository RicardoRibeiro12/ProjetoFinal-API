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

//Controlador
Route::post('/controlador', [ControladorController::class, 'store'])->name('createcontrolador');

Route::get('/sensores_atuadores/{id}', [CulturaController::class,'get_sensores_atuadores']);


Route::get('/regras', [RegrasController::class,'index'])->name('regras');

Route::get('/addcultura', function () {
    return view('addcultura');
});
Route::get('/addsensores', function () {
    return view('addsensores');
})->name('addsensores');

Route::get('/addatuadores', function () {
    return view('addatuador');
})->name('addatuadores');

Route::get('/controladores', function () {
    return view('controladores');
})->name('controladores');

Route::get('/addControlador', function () {
    return view('addControlador');
})->name('addControlador');

Route::get('/controladoresdetail', function () {
    return view('controladoresdetail');
})->name('controladoresdetail');

Route::get('/regras', function () {
    return view('regras');
})->name('regras');

Route::get('/addRegra', function () {
    return view('addRegra');
})->name('addRegra');

Route::get('/regradetail', function () {
    return view('regradetail');
})->name('regradetail');


Route::get('/addAtuacao', function () {
    return view('addAtuacao');
})->name('addAtuacao');

Route::get('/addCondicao', function () {
    return view('addCondicao');
})->name('addCondicao');

Route::get('/associaratuador', function () {
    return view('associarAtuador');
})->name('associaratuador');

Route::get('/associarsensor', function () {
    return view('associarSensor');
})->name('associarsensor');

Route::get('/logsSensor', function () {
    return view('logsSensor');
})->name('logsSensor');

Route::get('/logsAtuador', function () {
    return view('logsAtuador');
})->name('logsAtuador');



Route::post('cultura', [CulturaController::class, 'store']);

Auth::routes();

