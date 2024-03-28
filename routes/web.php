<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CvthequeController,
    CompetenceController,
    MetierController,
    ProfessionnelController
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

Route::get('competences/{competence}/delete', [CompetenceController::class, 'delete'])->name('competences.delete');
Route::post('competences/search', [CompetenceController::class, 'search'])->name('competences.search');
Route::resource('competences', CompetenceController::class);

Route::get('metiers/{metier}/delete', [MetierController::class, 'delete'])->name('metiers.delete');
Route::resource('metiers', MetierController::class);

Route::get('metier/{slug}/professionnels', [ProfessionnelController::class, 'index'])->name('professionnels.metier');
Route::get('professionnels/{professionnel}/delete', [ProfessionnelController::class, 'delete'])->name('professionnels.delete');
Route::post('professionnels/search', [ProfessionnelController::class, 'search'])->name('professionnels.search');
Route::resource('professionnels', ProfessionnelController::class);
