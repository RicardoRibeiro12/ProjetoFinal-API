<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObsController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AtuadorController;
use App\Http\Controllers\GatewayController;
use App\Http\Controllers\CulturaController;
use App\Http\Controllers\ControladorController;
use App\Http\Controllers\RegraController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\RactionController;



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



Route::get('/culturas', [CulturaController::class,'index']);

Route::get('/associaratuador/{id_user}',[CulturaController::class,'get_atuadores_user'])->name('getassociaratuador');

Route::get('/associarsensor/{id_user}', [CulturaController::class,'get_sensores_user'])->name('getassociarsensor');




Route::get('/sensores_atuadores/{id}', [CulturaController::class,'get_sensores_atuadores'])->name('sensores_atuadores');

Route::get('/controladores/{id_user}', [ControladorController::class,'index'])->name('controladores');

Route::get('/controladoresdetail/{id_controlador}', [ControladorController::class,'sensores_atuadores'])->name('controladoresdetail');

Route::get('/logsSensor/{id_sensor}', [SensorController::class,'sensor_logs'])->name('logsSensor');

Route::get('/logsExport/{id_sensor}',[SensorController::class,'logs_export'])->name('logsexport');

Route::get('/logsAtuador{id_atuador}',[AtuadorController::class,'acoes_logs'])->name('acoesAtuador');

Route::get('/regradetail/{id_regra}', [RegraController::class,'condicoes_acoes'])->name('regradetail');

Route::get('/regras', [RegraController::class,'index'])->name('regras');

Route::get('/addcultura', function () {
    return view('addcultura');
});
Route::get('/addsensore/{id_controlador}', [SensorController::class,'create'])->name('addsensores');

Route::get('/addatuadores/{id_controlador}', [AtuadorController::class,'create'])->name('addatuadores');

Route::get('/addCondicao/{id_regra}', [ConditionController::class,'create'])->name('addCondicao');

Route::get('/addAtuacao/{id_regra}',[RactionController::class,'create'])->name('addAtuacao');

Route::get('/viewdetail/{id_user}',[UserCOntroller::class,'get_details'])->name('userdetail');


Route::get('/addControlador', function () {
    return view('addControlador');
})->name('addControlador');



Route::get('/addRegra', function () {
    return view('addRegra');
})->name('addRegra');



Route::post('cultura', [CulturaController::class, 'store']);

Route::post('regra', [RegraController::class, 'store']);

Route::post('/controlador', [ControladorController::class, 'store'])->name('createcontrolador');

Route::post('/sensor',[SensorController::class, 'store'])->name('createsensor');

Route::post('/atuador',[AtuadorController::class,'store'])->name('createatuador');

Route::post('/atuadoracao',[AtuadorController::class,'atuadoracao'])->name('atuadoracao');

Route::post('/condition',[ConditionController::class, 'store'])->name('createcondition');

Route::post('/action',[RactionController::class, 'store'])->name('createcondition');

Route::post('/associarsensor', [CulturaController::class,'associar_sensor'])->name('associarsensor');

Route::post('/associaratuador', [CulturaController::class,'associar_atuador'])->name('associaratuador');



Auth::routes();

