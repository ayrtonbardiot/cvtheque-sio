<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CvthequeController,
    CompetenceController,
    MetierController
};
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

Route::get('/', [CvthequeController::class, 'index'])->name('accueil');
Route::resource('competences', CompetenceController::class);
Route::resource('metiers', MetierController::class);
Route::get('competences/{competence}/delete', [CompetenceController::class, 'delete'])->name('competences.delete');
Route::get('metiers/{metier}/delete', [MetierController::class, 'delete'])->name('metiers.delete');
