<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AnimalController;
use App\Http\Controllers\API\DoctorController;
use App\Http\Controllers\API\Asignacion_Mascota_DoctorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('animales',[AnimalController::class,'index']);
Route::post('animales',[AnimalController::class,'store']);
Route::get('animales/{animal}',[AnimalController::class,'show']);
Route::put('animales/{animal}',[AnimalController::class,'update']);
Route::delete('animales/{animal}',[AnimalController::class,'destroy']);


Route::get('doctores',[DoctorController::class,'index']);
Route::post('doctores',[DoctorController::class,'store']);
Route::get('doctores/{doctor}',[DoctorController::class,'show']);
Route::put('doctores/{doctor}',[DoctorController::class,'update']);
Route::delete('doctores/{doctor}',[DoctorController::class,'destroy']);

Route::get('asignacion',[Asignacion_Mascota_DoctorController::class,'index']);