@extends('layouts.app')

@section('content')
    <h1>Список категорий</h1>
    @foreach ($article_categories as $category)
        <h3>{{ $category->name }}</h3>

    @endforeach
@endsection

