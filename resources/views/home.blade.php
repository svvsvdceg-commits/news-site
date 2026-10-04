@extends('layout')

@section('title', 'Главная')

@section('content')
    <h1>Все новости</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    @foreach($news as $article)
        <article class="news">
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </article>
    @endforeach
@endsection
