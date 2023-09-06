
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
use App\Http\Middleware\ApiVerification;

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


Route::middleware(['api-verification'])->group(function () {
    // Define your protected routes here
    Route::post('/obsdatas', [ObsController::class, 'store']);
    Route::post('/actions', [AtuadorController::class, 'storeacoes']);
});
// Route::put('sensor/',[SensorController::class, 'create']);




//ações

//Route::get('/obsdatas',[ObsController::class,'index']);








