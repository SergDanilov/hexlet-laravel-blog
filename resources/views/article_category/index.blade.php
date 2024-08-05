@extends('layouts.app')

@section('content')
    <h1>{{$article_сategory->name}}</h1>
    <div>{{$article_сategory->body}}</div>


    @if ($article_сategory->articles->isEmpty())
        I don't have any records!
    @else
        <ol>
        @foreach ($article_сategory->articles as $article)
            <li>
            <a href="{{ route('articles.show', $article) }}">{{$article->name}}</a>
            </li>
        @endforeach
        </ol>
    @endif

@endsection
