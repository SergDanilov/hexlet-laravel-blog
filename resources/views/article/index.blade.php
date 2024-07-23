@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
<h2>Создать статью</h2>
{!! Form::model($article, ['route' => 'articles.store']) !!}
    {!! Form::label('name', 'Имя') !!}
    {!! Form::text('name') !!}
    {!! Form::label('body', 'Содержание') !!}
    {!! Form::textarea('body') !!}
    {!! Form::submit('Создать') !!}
{!! Form::close() !!}
