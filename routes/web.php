<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DetalhesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index']); 

//rota cadastro
Route::get('/cadastro', [UsersController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [UsersController::class, 'insert'])->name('cadastro');

//rota pagina principal
Route::get('/site', [IndexController::class, 'index'])->name('index');

//rota detalhes
Route::get('/detalhes/{p}', [DetalhesController::class, 'detalhe'])->name('detalhes');

//rota remover
Route::get('/excluir/{p}', [DetalhesController::class, 'remover'])->name('remover');
Route::delete('/excluir/{p}',[DetalhesController::class, 'deletar'])->name('deletar');