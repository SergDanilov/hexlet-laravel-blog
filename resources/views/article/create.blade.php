@extends('layouts.app')

@section('content')
    <h2>Создать статью</h2>
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
        {{  html()->label('Имя', 'name') }}
        {{  html()->input('text', 'name') }}
        {{  html()->label('Содержание', 'body') }}
        {{  html()->textarea('body') }}
        {{ html()->submit('Save') }}
    {{ html()->closeModelForm() }}
@endsection

