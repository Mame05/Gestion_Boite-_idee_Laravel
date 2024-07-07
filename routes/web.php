<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Administrateur\AdministrateurLoginController;

/*Route::get('/', function () {
    return view('welcome');
});*/
//CRUD CATÉGORIE
//Route::middleware(['auth'])->group(function () {
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');
Route::get('/idee/{idee}', [IdeeController::class, 'show'])->name('idee.show');
Route::post('/idees/{idee}/approve', [IdeeController::class, 'approve'])->name('idees.approve');
Route::post('/idees/{idee}/reject', [IdeeController::class, 'reject'])->name('idees.reject');

//});
// CRUD IDÉE

Route::get('/', [IdeeController::class, 'index'])->name('idees.index');
Route::get('/idees/{idee}/edit', [IdeeController::class, 'edit'])->name('idees.edit');
Route::put('/idees/{idee}', [IdeeController::class, 'update'])->name('idees.update');
Route::delete('/idees/{idee}', [IdeeController::class, 'destroy'])->name('idees.destroy');


Route::get('/idees/{idee}/commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');
Route::post('/idees/{idee}/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');


/*Connection*/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'AuthentificationLogin'])->name('login.save');


/*Déconnection*/
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/idee/create', [IdeeController::class, 'create'])->name('idee.create');
Route::post('/idees', [IdeeController::class, 'store'])->name('idees.store');
