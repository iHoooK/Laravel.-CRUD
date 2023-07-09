@extends('layouts.main')

@section('content')
    
    <h1>Создание поста</h1>

    <div>
        <a href="{{ route('post.index') }}">Вернуться к списку постов</a>
    </div>
    
    <form action="{{ route('post.store') }}" method="POST" class="form">
        @csrf
        <div class="mt20">
            <div class="form-group">
                <input type="text" name="title" placeholder="Название поста">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt20">
                <textarea name="content">{{ old('content') }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt20">
                <label>Выберете категорию</label>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option
                                value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? 'selected' : ''}}
                        >
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt20">
                <label>Тэги</label>
                <select multiple="multiple" name="tag_ids[]" data-placeholder="Выберете тэги">
                    @foreach($tags as $tag)
                        <option
                                value="{{ $tag->id }}"
                                {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : ''}}
                        >
                            {{ $tag->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <input type="submit" class="button mt20" value="Добавить">
    </form>
@endsection