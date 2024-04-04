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
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/produits', [App\Http\Controllers\HomeController::class, 'produits'])->name('produits');
Route::get('/commands', [App\Http\Controllers\HomeController::class, 'commands'])->name('commands');
Route::get('/admins', [App\Http\Controllers\HomeController::class, 'admins'])->name('admins');
Route::get('/addadmin', [App\Http\Controllers\HomeController::class, 'addadmin'])->name('addadmin');
Route::post('/addadmin', [App\Http\Controllers\HomeController::class, 'createadmin'])->name('createadmin');

Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/deletep/{id}',[HomeController::class,"destroyp"]);
Route::get('/deletec/{id}',[HomeController::class,"destroyc"]);
Route::get('/deletea/{id}',[HomeController::class,"destroya"]);

Route::put('/canceled/{id}', [App\Http\Controllers\HomeController::class, 'canceledcommand'])->name('canceled');
Route::put('/confirmed/{id}', [App\Http\Controllers\HomeController::class, 'confirmedcommand'])->name('confirmed');

Route::get('/details/{id}', [App\Http\Controllers\HomeController::class, 'details'])->name('details');
Route::get('/ajouterProduit', [App\Http\Controllers\HomeController::class, 'ajouter'])->name('ajouter');
Route::post('/ajouterProduit', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

Route::get('/ajouterImg', [App\Http\Controllers\HomeController::class, 'ajouterImg'])->name('ajouterImg');
Route::post('/ajouterImg', [App\Http\Controllers\HomeController::class, 'storeImg'])->name('storeImg');
