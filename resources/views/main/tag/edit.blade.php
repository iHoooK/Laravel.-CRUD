@extends('layouts.main')

@section('content')
    
    <h1>Редактирвоание тега</h1>

    <div>
        <a href="{{ route('tag.index') }}">Вернуться к списку тегов</a>
    </div>
    
    <form action="{{ route('tag.update', $tag->id) }}" method="POST" class="form">
        @csrf
        @method('PATCH')
        <div class="mt20">
            <div class="form-group">
                <input type="text" name="title" placeholder="Название тега" value="{{ old('title', $tag->title) }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" class="button mt20" value="Обновить">
    </form>
@endsection