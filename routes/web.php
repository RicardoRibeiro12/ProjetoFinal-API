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

Route::get('/associaratuador/{id_user}',[CutluraController::class,'get_sensores_user'])->name('associaratuador');

Route::get('/associarsensor/{id_user}', [CulturaController::class,'get_sensores_user'])->name('get_sensor_user');

//Controlador


Route::get('/sensores_atuadores/{id}', [CulturaController::class,'get_sensores_atuadores']);

Route::get('/controladores/{id_user}', [ControladorController::class,'index'])->name('controladores');

Route::get('/controladoresdetail/{id_controlador}', [ControladorController::class,'sensores_atuadores'])->name('controladoresdetail');

Route::get('/logsSensor/{id_sensor}', [SensorController::class,'sensor_logs'])->name('logsSensor');

Route::get('/logsExport/{id_sensor}',[SensorController::class,'logs_export'])->name('logsexport');

Route::get('/regradetail/{id_regra}', [RegraController::class,'condicoes_acoes'])->name('regradetail');

Route::get('/regras', [RegraController::class,'index'])->name('regras');

Route::get('/addcultura', function () {
    return view('addcultura');
});
Route::get('/addsensore/{id_controlador}', [SensorController::class,'create'])->name('addsensores');

Route::get('/addCondicao/{id_regra}', [ConditionController::class,'create'])->name('addCondicao');

Route::get('/addAtuacao/{id_regra}',[RactionController::class,'create'])->name('addAtuacao');


Route::get('/addatuadores', function () {
    return view('addatuador');
})->name('addatuadores');

/*Route::get('/controladores', function () {
    return view('controladores');
})->name('controladores');
*/
Route::get('/addControlador', function () {
    return view('addControlador');
})->name('addControlador');

/*Route::get('/controladoresdetail', function () {
    return view('controladoresdetail');
})->name('controladoresdetail');

Route::get('/regras', function () {
    return view('regras');
})->name('regras');

*/

Route::get('/addRegra', function () {
    return view('addRegra');
})->name('addRegra');

/*
Route::get('/regradetail', function () {
    return view('regradetail');
})->name('regradetail');

*/





/*Route::get('/logsSensor', function () {
    return view('logsSensor');
})->name('logsSensor');
*/
Route::get('/logsAtuador', function () {
    return view('logsAtuador');
})->name('logsAtuador');



Route::post('cultura', [CulturaController::class, 'store']);

Route::post('regra', [RegraController::class, 'store']);

Route::post('/controlador', [ControladorController::class, 'store'])->name('createcontrolador');

Route::post('/sensor',[SensorController::class, 'store'])->name('createsensor');

Route::post('/condition',[ConditionController::class, 'store'])->name('createcondition');

Route::post('/action',[RactionController::class, 'store'])->name('createcondition');

Auth::routes();

