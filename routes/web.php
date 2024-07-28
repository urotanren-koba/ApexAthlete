<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeminiController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TrainingMenuController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});


Route::get('/mypage', function () {
    return view('results.mypage');
})->middleware(['auth', 'verified'])->name('results.mypage');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
});

Route::get('/consulting', [GeminiController::class, 'index'])->name('consulting');;
Route::post('/consulting', [GeminiController::class, 'post']);
Route::post('/save-result', [ResultController::class, 'store'])->name('save-result');
Route::get('/mypage', [ResultController::class, 'index'])->name('results.mypage');
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/result/{id}', [ResultController::class, 'show'])->name('result.show');



