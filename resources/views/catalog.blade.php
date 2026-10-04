@extends('layout')

@section('title', 'Каталог')

@section('content')
    <h1>Искусственный интеллект</h1>

    @foreach($news as $article)
        <article class="news">
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </article>
    @endforeach
@endsection
