<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\TontineController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('About');
})->name('about');

Route::get('/contact', function () {
    return view('Contact-create');
})->name('contact');

Route::get('/articles', [ArticleController::class, 'index'])->name('article-create');
Route::get('/comments/create', [CommentsController::class, 'create'])->name('comment-create');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::get('/payments/create', [PaymentsController::class, 'create'])->name('payment-create');
Route::get('/programs/create', [ProgramsController::class, 'create'])->name('programs-create');
Route::get('/tontines/create', [TontineController::class, 'create'])->name('tontine-create');
Route::post('/tontines/store', [TontineController::class, 'store'])->name('tontines.store');
// Afficher le formulaire de participation
Route::get('/participant/create', [ParticipantsController::class, 'create'])->name('participant-create');

// Enregistrer une participation
Route::post('/participant', [ParticipantsController::class, 'store'])->name('participant.store');
Route::get('/users', [UsersController::class, 'index'])->name('user-create');



Route::get('/contact', [ContactController::class, 'create'])
    ->name('Contact-create');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
