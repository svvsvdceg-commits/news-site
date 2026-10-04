<?php

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $news = News::latest()->get();
    return view('home', ['news' => $news]);
});

Route::get('/catalog', function () {
    $news = [];

    foreach (News::latest()->get() as $article) {
        if (mb_stripos($article->title.' '.$article->content, 'искусственный интеллект') !== false) {
            $news[] = $article;
        }
    }

    return view('catalog', ['news' => $news]);
});

Route::view('/journalist', 'journalist');
Route::view('/admin', 'admin');

Route::post('/journalist', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ], [
        'title.required' => 'Введите заголовок.',
        'title.max' => 'Заголовок должен быть не длиннее 255 символов.',
        'content.required' => 'Введите текст статьи.',
    ]);

    News::create($data);

    return redirect('/')->with('message', 'Статья создана.');
});
