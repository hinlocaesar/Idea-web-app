<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;


Route::get('/', function () {
    $ideas = Idea::query()
        ->when(request('state'), function ($query, $state) {
            $query->where('state', $state);
        })
        ->get();

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::get('/ideas', function () {
    return redirect('/');
});

Route::post('/ideas', function () {
    $idea = trim((string) request('ideas'));

    Idea::create([
        'description' => $idea,
        'state' => 'idea',
    ]);
    return redirect('/');
});


//temporary delete all ideas
Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});
