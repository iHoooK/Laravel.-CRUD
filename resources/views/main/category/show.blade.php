@extends('layouts.main')

@section('content')
    
    <h1>Категория «{{ $category->title }}»</h1>

    <div>
        <a href="{{ route('category.index') }}">Вернуться к списку категорий</a>
    </div>
    
    <table class="table mt20">
        <tr>
            <th style="width:5%;">ID</th>
            <th style="width:95%;">Title</th>
        </tr>
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
        </tr>
    </table>
    
    <div class="mt20">
        <a href="{{ route('category.edit', $category->id) }}">Редактировать категорию</a>
    </div>
    
    <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="mt20">
        @csrf
        @method('DELETE')
        <button type="submit">Удалить категорию</button>
    </form>

@endsection