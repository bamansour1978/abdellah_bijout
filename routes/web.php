<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::get("/",[MainController::class,"index"]);
Route::get('/home', [MainController::class, 'index']);
Route::get('/search', [MainController::class, 'search']);
Route::get('/products', [MainController::class, 'products']);
Route::get('/category/{category}', [MainController::class, 'category']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/product/{id}', [MainController::class, 'product']);
Route::get('/politique', [MainController::class, 'politique']);
Route::get('/livraison', [MainController::class, 'livraison']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/ajouter', [MainController::class, 'ajouter']);
Route::post("/ajouter",[MainController::class,"store"]);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/produits', [App\Http\Controllers\HomeController::class, 'produits'])->name('produits');
Route::get('/commands', [App\Http\Controllers\HomeController::class, 'commands'])->name('commands');
Route::get('/admins', [App\Http\Controllers\HomeController::class, 'admins'])->name('admins');
