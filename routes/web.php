<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasalsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[CasalsController::class, 'listarCasals']);
Route::get('/nou-casal',[CasalsController::class, 'formNewCasal']);
Route::post('/casal-creat',[CasalsController::class, 'newCasal'])->name('newCasal');
Route::get('/casal/{casal?}',[CasalsController::class, 'casalInfo']);
Route::post('/casal-modificat',[CasalsController::class, 'modifyCasal'])->name('modifyCasal');
Route::get('/esborrar-casal/{casal?}',[CasalsController::class, 'esborrarCasal']);
