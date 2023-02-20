<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashController;

Route::get('/',[MainController::class,'index']);

Route::get('/login',[LoginController::class, 'login']);

Route::get('/dash', [DashController::class, 'dash']);

Route::post('/notification', [DashController::class, 'store']);

Route::post('/novidade', [DashController::class, 'setNew']);

Route::get('/recuperarsenha',[LoginController::class, 'recuperarsenha']);

Route::get('/cadastrar',[LoginController::class, 'cadastrar']);

#---------------------------------     PLANOS FUTUROS    --------------------------------------------------#

Route::get('/calendario',[MainController::class,'calendario']);

Route::get('/departamentos',[MainController::class,'departamentos']);

Route::get('/acervo',[MainController::class,'acervo']);

Route::get('/extensao',[MainController::class,'extensao']);

Route::get('/cursos',[MainController::class,'cursos']);
