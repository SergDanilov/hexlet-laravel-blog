@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
<h2>Создать статью</h2>
{{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
    {{  html()->label('Имя', 'name') }}
    {{  html()->input('text', 'name') }}
    {{  html()->label('Содержание', 'body') }}
    {{  html()->textarea('body') }}
    {{ html()->submit('Save') }}
{{ html()->closeModelForm() }}

