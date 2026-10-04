@extends('layout')

@section('title', 'Журналист')

@section('content')
    <h1>Создание статьи</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ url('/journalist') }}" method="POST">
        @csrf

        <label for="title">Заголовок</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" maxlength="255" required>

        <label for="content">Текст статьи</label>
        <textarea id="content" name="content" rows="8" required>{{ old('content') }}</textarea>

        <button type="submit">Создать</button>
    </form>
@endsection
