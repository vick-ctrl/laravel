<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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



// //aluno
// Route::get('aluno/login', [App\Http\Controllers\Contato::class, 'login']);
// Route::get('aluno/logout', [App\Http\Controllers\Contato::class, 'logout']);
// Route::get('aluno/rematricula', [App\Http\Controllers\Aluno::class, 'rematricula']);
// Route::get('aluno/cancelar', [App\Http\Controllers\Aluno::class, 'cancelarMatricula']);
// Route::get('aluno/boletim', [App\Http\Controllers\Aluno::class, 'boletim']);




Route::get('/', [App\Http\Controllers\Principal::class, 'home'])->name('pagina-inicial');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'about'])->name('pagina-sobre');





