@extends('layouts.main')

@section('content')
    
    <h1>Редактирвоание категории</h1>

    <div>
        <a href="{{ route('category.index') }}">Вернуться к списку категорий</a>
    </div>
    
    <form action="{{ route('category.update', $category->id) }}" method="POST" class="form">
        @csrf
        @method('PATCH')
        <div class="mt20">
            <div class="form-group">
                <input type="text" name="title" placeholder="Название категории" value="{{ old('title', $category->title) }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" class="button mt20" value="Обновить">
    </form>
@endsection