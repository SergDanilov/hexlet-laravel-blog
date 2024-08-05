@extends('layouts.app')

@section('content')
    <h2>найти статью</h2>    
    {{  html()->form('GET', route('articles.index'))->open() }}
        {{ html()->text('q', $q) }}
        {{ html()->submit('Найти') }}
    {{ html()->form()->close() }}
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
<h2><a href="{{ route('articles.create') }}">Создать статью</a></h2>


