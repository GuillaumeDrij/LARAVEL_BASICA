<?php

use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('templates.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');