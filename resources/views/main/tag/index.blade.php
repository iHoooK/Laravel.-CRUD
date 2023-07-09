@extends('layouts.main')

@section('content')
    
    <h1>Список тегов</h1>

    <div>
        <a href="{{route('main.index')}}">Вернуться на главную</a>
    </div>

    <div class="mt20">
        <a href="{{ route('tag.create') }}" class="button">Добавить тег</a>
    </div>

    <table class="table mt20">
        <tr>
            <th style="width:5%;">#</th>
            <th style="width:5%;">ID</th>
            <th style="width:60%;">Название</th>
            <th colspan="3" style="width:30%;">Действия</th>
        </tr>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->title }}</td>
                <td><a href="{{ route('tag.show', $tag->id) }}">посмотреть</a></td>
                <td><a href="{{ route('tag.edit', $tag->id) }}">редактировать</a></td>
                <td>
                    <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection