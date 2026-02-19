<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;
use App\Http\Controllers\Auth\SessionController;


Route::get('/', function () {
    return 'Placeholder for home page';
});


Route::middleware('auth')->group(function () {
//index
Route::get('ideas', [IdeaController::class, 'index'])->name('ideas.index');

//create Create Idea will hit the "store" route action
Route::get('/ideas/create', [IdeaController::class, 'create'])->name('ideas.create');

//show
Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

//edit
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');

//update
Route::patch('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');


//store
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');


//destroy
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
});


Route::middleware('guest')->group(function () {
//register
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);
});


//logout
Route::post('/logout', [SessionController::class, 'destroy']);

//login
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);



