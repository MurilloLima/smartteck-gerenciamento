<?php

use App\Http\Controllers\admin\ConsultoresController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CredoresController;
use App\Http\Controllers\admin\DevedoresController;
use App\Http\Controllers\admin\FinanceiroController;
use App\Http\Controllers\admin\GrupoController;
use App\Http\Controllers\admin\ListaController;
use App\Http\Controllers\admin\NotificacoesController;
use App\Http\Controllers\admin\SuportController;
use App\Http\Controllers\MaladiretaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.index');
});

// Route::get('/dashboard', function () {
//     return view('admin.pages.dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ConsultoresController::class, 'index'])->name('dashboard');

    // smtp
    Route::get('/smtp', [SmtpController::class, 'index'])->name('smtp.index');
    //consultores
    Route::get('/consultores', [ConsultoresController::class, 'index'])->name('consultores.index');
    Route::get('/consultores/create', [ConsultoresController::class, 'create'])->name('consultores.create');
    Route::post('/consultores/store', [ConsultoresController::class, 'store'])->name('consultores.store');

    //lista
    Route::get('/lista', [ListaController::class, 'index'])->name('lista.index');
    Route::get('/lista/create', [ListaController::class, 'create'])->name('lista.create');
    //grupos
    Route::get('/consultores/grupo', [GrupoController::class, 'index'])->name('grupo.index');
    Route::get('/consultores/grupo/create', [GrupoController::class, 'create'])->name('grupo.create');
    //devedores
    Route::get('/devedores', [DevedoresController::class, 'create'])->name('devedores.index');
    // financeiro
    Route::get('/financeiro', [FinanceiroController::class, 'index'])->name('financeiro.index');
    // credores
    Route::get('/creadores', [CredoresController::class, 'index'])->name('credor.index');
    // users
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    // suporte
    Route::get('/suporte', [SuportController::class, 'index'])->name('suporte.index');
    // devedores
    Route::get('/devedores', [DevedoresController::class, 'index'])->name('devedores.index');
    Route::get('/devedores/create', [DevedoresController::class, 'create'])->name('devedores.create');
    // relatorio devedores inativo
    Route::get('/relatorio/devedores/inativos', [DevedoresController::class, 'inativo'])->name('relatorio.inativo');
    // mala direta
    Route::get('/maladireta', [MaladiretaController::class, 'index'])->name('maladireta.index');
    // notificacoes
    Route::get('/notificacoes', [NotificacoesController::class, 'index'])->name('notificacoes.index');
    // financeiro
    Route::get('/financeiro', [FinanceiroController::class, 'index'])->name('financeiro.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [ConsultoresController::class, 'index'])->name('home');
