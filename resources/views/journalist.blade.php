@extends('layout')

@section('title', 'Журналист')

@section('content')
    <h1>Создание статьи</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form action="{{ url('/journalist') }}" method="POST">
        @csrf

        <label for="title">Заголовок</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Текст статьи</label>
        <textarea id="content" name="content" rows="8" required></textarea>

        <button type="submit">Создать</button>
    </form>
@endsection
