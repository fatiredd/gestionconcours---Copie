<?php use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\ResultatsController;
use App\Http\Controllers\CandidatureController;

Route::get('/concours', [ConcoursController::class, 'index'])->name('concours.index');
Route::get('/candidature/create/{concours_id}', [CandidatureController::class, 'create'])->name('candidature.create');
Route::post('/candidature', [CandidatureController::class, 'store'])->name('candidature.store');
Route::get('/candidature/{concours_id}', [CandidatureController::class, 'index'])->name('candidature.index');
Route::get('/candidature/show/{id}', [CandidatureController::class, 'show'])->name('candidature.show');

Route::get('/concours/{id}/candidats', [ConcoursController::class, 'showCandidates'])->name('concours.candidats');

Route::get('/concours/resultats', [ResultatsController::class, 'index'])->name('concours.resultats');
Route::post('/resultats', [ResultatsController::class, 'store'])->name('resultats.store');
Route::get('/resultats/{id}', [ResultatsController::class, 'show'])->name('resultats.show');

Route::get('/concours/create', [ConcoursController::class, 'create'])->name('concours.create');
Route::post('/concours', [ConcoursController::class, 'store'])->name('concours.store');
Route::get('/concours/{id}/edit', [ConcoursController::class, 'edit'])->name('concours.edit');
Route::put('/concours/{id}', [ConcoursController::class, 'update'])->name('concours.update');
Route::delete('/concours/{id}', [ConcoursController::class, 'destroy'])->name('concours.destroy');
Route::get('/concours/{id}', [ConcoursController::class, 'show'])->name('concours.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

?>