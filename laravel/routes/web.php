<?php

use App\Http\Controllers\CursosController;
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

Route::get('/', function () {
    return view('welcome');
});

//a rota jogos, chama o controller CursosController, na puclic function index
//Route::get('/painel-admin', [CursosController::class, 'index']);

//todas as rotas dentro desse grupo de rotas terão o mesmo prefixo 'painel-admin'
Route::prefix('painel-admin')->group(function(){
    Route::get('/', [CursosController::class, 'index'])->name('cursos-index');   //rota listagem dos cursos
    
    
    //CREATE
    Route::get('/create-curso', [CursosController::class, 'create'])->name('cursos-create');   //rota criação dos cursos
    Route::post('/', [CursosController::class, 'store'])->name('cursos-store');   //rota armazenar os cursos criados

    //UPDATE
    Route::get('/{id}/edit-curso', [CursosController::class, 'edit'])->where('id', '[0-9]+')->name('cursos-edit');   //rota editar
    Route::put('/{id}', [CursosController::class, 'update'])->where('id', '[0-9]+')->name('cursos-update');   

    //DELETE
    Route::delete('/{id}', [CursosController::class, 'destroy'])->where('id', '[0-9]+')->name('cursos-destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





//quando tiver algum erro referente a rota, mostra na tela esse return
Route::fallback(function(){
    return"Erro na rota";
});

require __DIR__.'/auth.php';
