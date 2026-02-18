<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $ideas=session()->get('ideas', []);

    return view('ideas',[
        'ideas'=>$ideas,
    ]);
});

Route::get('/ideas', function () {
    return redirect('/');
});

Route::post('/ideas', function () {
    $idea = trim((string) request('ideas'));

    if ($idea !== '') {
        session()->push('ideas', $idea);
    }

    return redirect('/');
});


//temporary delete all ideas
Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});
