<?php

use App\Http\Controllers\PageController;
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

// PASTAS CRUD

// index
Route::get('/comics', [PageController::class, 'index'])->name('comics.index');

// create (deve stare prima della show nel caso in cui non specifichiamo che show dev essere un numero/id)
Route::get('/comics/create', [PageController::class, 'create'])->name('comics.create');

// show, in /comics /{comic}->va a prendersi dal PageController il quale si prende dal Model la sua(del Model) istanza Comic $comic che passa alla rotta l'id come parametro che corrisponde all'item con l'ID corrispettivo
Route::get('/comics/{comic}', [PageController::class, 'show'])->name('comics.show');


Route::post('/comics', [PageController::class, 'store'])->name('comics.store');
