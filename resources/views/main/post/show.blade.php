@extends('layouts.main')

@section('content')
    
    <h1>Пост «{{ $post->title }}»</h1>

    <div>
        <a href="{{ route('post.index') }}">Вернуться к списку постов</a>
    </div>
    
    <table class="table mt20">
        <tr>
            <th style="width:5%;">ID</th>
            <th style="width:20%;">Название</th>
            <th style="width:60%;">Контент</th>
        </tr>
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
        </tr>
    </table>
    
    <div class="mt20">
        <a href="{{ route('post.edit', $post->id) }}">Редактировать пост</a>
    </div>
    
    <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="mt20">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить пост</button>
    </form>

@endsection