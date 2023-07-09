@extends('layouts.main')

@section('content')

    <h1>Главная</h1>

    <div><a href="{{route('post.index')}}">Все посты</a></div>
    <div><a href="{{route('category.index')}}">Все категории</a></div>
    <div><a href="{{route('tag.index')}}">Все теги</a></div>
@endsection