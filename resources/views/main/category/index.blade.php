@extends('layouts.main')

@section('content')
    
    <h1>Список категорий</h1>

    <div>
        <a href="{{route('main.index')}}">Вернуться на главную</a>
    </div>

    <div class="mt20">
        <a href="{{ route('category.create') }}" class="button">Добавить категорию</a>
    </div>

    <table class="table mt20">
        <tr>
            <th style="width:5%;">#</th>
            <th style="width:5%;">ID</th>
            <th style="width:60%;">Название</th>
            <th colspan="3" style="width:30%;">Действия</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td><a href="{{ route('category.show', $category->id) }}">посмотреть</a></td>
                <td><a href="{{ route('category.edit', $category->id) }}">редактировать</a></td>
                <td>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection