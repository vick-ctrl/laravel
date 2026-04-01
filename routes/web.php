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

// Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
// //aluno
// Route::get('aluno/login', [App\Http\Controllers\Contato::class, 'login']);
// Route::get('aluno/logout', [App\Http\Controllers\Contato::class, 'logout']);
// Route::get('aluno/rematricula', [App\Http\Controllers\Aluno::class, 'rematricula']);
// Route::get('aluno/cancelar', [App\Http\Controllers\Aluno::class, 'cancelarMatricula']);
// Route::get('aluno/boletim', [App\Http\Controllers\Aluno::class, 'boletim']);

// //professor
// Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);
// Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);

Route::get('/professor/listar', [App\Http\Controllers\Professor::class, 'show'])->name('professor.show');

Route::get('/aluno/listar', [App\Http\Controllers\Aluno::class, 'show'])->name('aluno.show');

Route::get('/curso/listar', [App\Http\Controllers\Curso::class, 'show'])->name('curso.show');

Route::get('/componente/listar', [App\Http\Controllers\Componente::class, 'show'])->name('componente.show');

Route::get('/aluno/add/{nome}/{email}/telefone', [App\Http\Controllers\Componente::class, 'show'])->name('componente.show');











