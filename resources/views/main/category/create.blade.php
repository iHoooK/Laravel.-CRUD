@extends('layouts.main')

@section('content')
    
    <h1>Создание категории</h1>

    <div>
        <a href="{{ route('category.index') }}">Вернуться к списку категорий</a>
    </div>
    
    <form action="{{ route('category.store') }}" method="POST" class="form">
        @csrf
        <div class="mt20">
            <div class="form-group">
                <input type="text" name="title" placeholder="Название категории">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" class="button mt20" value="Добавить">
    </form>
@endsection