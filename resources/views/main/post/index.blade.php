@extends('layouts.main')

@section('content')
    
    <h1>Список постов</h1>

    <a href="{{route('main.index')}}">Вернуться на главную</a>

    <div class="mt20">
        <a href="{{ route('post.create') }}" class="button">Добавить пост</a>
    </div>

    <table class="table mt20">
        <tr>
            <th style="width:5%;">#</th>
            <th style="width:5%;">ID</th>
            <th style="width:20%;">Название</th>
            <th style="width:50%;">Контент</th>
            <th colspan="3" style="width:20%;">Действия</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td><a href="{{ route('post.show', $post->id) }}">посмотреть</a></td>
                <td><a href="{{ route('post.edit', $post->id) }}">редактировать</a></td>
                <td>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

