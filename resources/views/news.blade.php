@extends('layouts.app')

@section('content')

<div class="card">
    @if (empty($response->articles))
    <h1 class="wel1">no latest flood news</h1>
    @else
    <h1 class="wel1">latest news</h1>
    @foreach($response->articles as $article)
    <div class="row NewsGrid">
        <div class="col-4">
            <img class="imgsize" src="{{$article->urlToImage;}}" alt="News thumbnail">
        </div>
        <div class="col-8">
            <h2>Title: {{$article->title}}</h2>
            <h5>{{$article->source->id}}</h5>
            <h5>description:{{$article->description}}</h5>
            <p>content:{{$article->content}}</p>
            <h6>author:{{$article->author}}</h6>
            <h6>published:{{$article->publishedAt}}</h6>
            <h6>URL:<a href="{{$article->url}}">{{$article->url}}</a></h6>
        </div>
    </div>
    @endforeach
    @endif
    
</div>



@endsection