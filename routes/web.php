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
// Route::get('/contato', [App\Http\Controllers\contato::class, 'contato']);
// Route::get('/rematricula', [App\Http\Controllers\Aluno::class, 'rematricula']);
// Route::get('/cancelar-matricula', [App\Http\Controllers\Aluno::class, 'cancelar']);
// Route::get('/notas', [App\Http\Controllers\pai::class, 'notas']);
// Route::get('/chamada', [App\Http\Controllers\professor::class, 'chamada']);

// Route::get('/aluno/login', [App\Http\Controllers\contato::class, 'contato']);

// Route::get('/professor/login', [App\Http\Controllers\contato::class, 'contato']);

Route::get('/', [App\Http\Controllers\principal::class, 'principal'])->name('pagina-inicial');

Route::prefix('publico')->group(function(){

    Route::get('/contato/{nome}', [App\Http\Controllers\principal::class, 'contato']);
    Route::get('/contato/{nome}/{sobrenome}', [App\Http\Controllers\principal::class, 'contatoNomeCompleto']); 
    Route::get('/contato/{nome}/{sobrenome}/{assunto}', [App\Http\Controllers\principal::class, 'assunto']);
    Route::get('/contato/{nome}/{sobrenome}/{assunto}/{emai}/{telefone?}', [App\Http\Controllers\principal::class, 'mensagem']);

});



Route::fallback(function(){
    echo "A rota acessada não existe :(";
    echo "<a href='". route('pagina-inicial') . "'>Voltar</a>";
});





