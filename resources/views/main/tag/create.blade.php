@extends('layouts.main')

@section('content')
    
    <h1>Создание тега</h1>

    <div>
        <a href="{{ route('tag.index') }}">Вернуться к списку тегов</a>
    </div>
    
    <form action="{{ route('tag.store') }}" method="POST" class="form">
        @csrf
        <div class="mt20">
            <div class="form-group">
                <input type="text" name="title" placeholder="Название тега">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" class="button mt20" value="Добавить">
    </form>
@endsection