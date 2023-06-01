
<?php

use Illuminate\Http\Request;
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
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::put('sensor/',[SensorController::class, 'create']);

Route::post('/obsdatas', [ObsController::class, 'store']);
Route::get('/obsdatas',[ObsController::class,'index']);

Route::post('/sensors',[SensorController::class, 'store']);


// User
Route::post('/user', [UserController::class, 'store']);

// Gateway
Route::post('/gateway', [GatewayController::class, 'store']);



//Cultura
Route::post('cultura', [CulturaController::class, 'store']);

//Atuadores
Route::post('/atuadores',[AtuadorController::class, 'store']);
