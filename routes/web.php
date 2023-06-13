<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Models\Article;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
//FRONT
Route::get('/', [FrontController::class, 'indexHome'])->name('home');
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');

Route::resource('articles', ArticleController::class);

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');

Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.index')->middleware('isRevisor');
Route::patch('/accetta/articolo/{article}',[RevisorController::class,'accept'])->name('revisor.accept');
Route::patch('/rifiuta/articolo/{article}',[RevisorController::class,'reject'])->name('revisor.reject');
Route::patch('/revisiona/articolo/{article}',[RevisorController::class,'nullable'])->name('revisor.nullable');

Route::get('/lavora-con-noi', [RevisorController::class, 'lavoro'])->middleware('auth')->name('revisor.lavoro');
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class,'makeRevisor'])->name('make.revisor');

Route::get('/ricerca/postit', [FrontController::class, 'searchPostit'])->name('postit.search');

Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('setLocale');


////////////////////
Route::get('admin/console', [RevisorController::class, 'consoleArticles'])->name('admin.console');


