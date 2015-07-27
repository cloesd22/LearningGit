@extends('baseframe')

@section('content')

 <h1>Articles</h1>
@foreach ($articles as $article)
    <br>

    <a href="/articles/{{action('ArticlesController@show,[$article->id]}}"><h2>{{$article->title}}</h2>"</a>

    <div class="body">{{$article->body}}</div>
    <br>
@endforeach
@stop