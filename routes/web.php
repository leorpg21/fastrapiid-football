<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\GoleadoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamsController;

Route::get('/', HomeController::class);
Route::get('goleadores', [GoleadoresController::class, 'index']);
Route::get('asistencia', [AsistenciaController::class, 'index']);
Route::get('equipos', [TeamsController::class, 'index']);
Route::get('equipos/{team}', [TeamsController::class, 'showTeam']);
Route::get('calendario', [CalendarioController::class, 'index']);
// Route::get('/calendario/{mes?}', function ($mes = null){
//     if(!empty($mes)){
//         return "En esta pagina se motrara todos los enventos del mes ". $mes;
//     }
//     return "pagina de calendario";
// });