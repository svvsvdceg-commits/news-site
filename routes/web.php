<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/catalog', 'catalog');
Route::view('/journalist', 'journalist');
Route::view('/admin', 'admin');

Route::post('/journalist', function () {
    return back()->with('message', 'Сохранение статей пока не подключено.');
});
