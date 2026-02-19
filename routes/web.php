<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;
use App\Http\Controllers\Auth\SessionController;




//index
Route::get('ideas', [IdeaController::class, 'index'])->name('ideas.index');

//create Create Idea will hit the "store" route action
Route::get('/ideas/create', [IdeaController::class, 'create']);

//show
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

//edit
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);

//update
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);


//store
Route::post('/ideas', [IdeaController::class, 'store']);


//destroy
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);



//register
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

//logout
Route::post('/logout', [SessionController::class, 'destroy']);

//login
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);



