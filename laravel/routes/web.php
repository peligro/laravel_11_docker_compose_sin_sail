<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ColasController; 
use App\Http\Controllers\RealtimeController;
use App\Http\Controllers\RealtimeFormularioController;


Route::get('/', [HomeController::class, 'home_index'])->name('home_index');

Route::get('/colas', [ColasController::class, 'colas_index'])->name('colas_index');

Route::get('/colas/enviar', [ColasController::class, 'colas_enviar'])->name('colas_enviar');
Route::post('/colas/enviar', [ColasController::class, 'colas_enviar_post'])->name('colas_enviar_post');

Route::get('/realtime', [RealtimeController::class, 'realtime_index'])->name('realtime_index');
Route::get('/realtime/enviar', [RealtimeController::class, 'realtime_enviar'])->name('realtime_enviar');

Route::get('/realtime-bd', [RealtimeFormularioController::class, 'realtime_bd_index'])->name('realtime_bd_index');
Route::get('/realtime-bd/enviar', [RealtimeFormularioController::class, 'realtime_bd_enviar'])->name('realtime_bd_enviar');
Route::post('/realtime-bd/enviar', [RealtimeFormularioController::class, 'realtime_bd_enviar_post'])->name('realtime_bd_enviar_post');