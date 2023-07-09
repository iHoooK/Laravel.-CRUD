@extends('layouts.main')

@section('content')
    
    <h1>Тег «{{ $tag->title }}»</h1>

    <div>
        <a href="{{ route('tag.index') }}">Вернуться к списку тегов</a>
    </div>
    
    <table class="table mt20">
        <tr>
            <th style="width:5%;">ID</th>
            <th style="width:95%;">Title</th>
        </tr>
        <tr>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->title }}</td>
        </tr>
    </table>
    
    <div class="mt20">
        <a href="{{ route('tag.edit', $tag->id) }}">Редактировать тег</a>
    </div>
    
    <form action="{{ route('tag.destroy', $tag->id) }}" method="POST" class="mt20">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить тег</button>
    </form>

@endsection