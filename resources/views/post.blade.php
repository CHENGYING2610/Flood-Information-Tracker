@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" width="100%">
        <div id="welheading" class="wel1">
            <h1>Discussion Forum</h1>
        </div>
        <div class="wel2">
            <div class="row">
                <div class="col-9">
                    <h1>{{$post['title']}}</h1>
                </div>
                @auth
                @if (auth()->user()->role == "admin" || auth()->user()->id == $post['user_id'])
                <div class="col-3">
                    <a href="{{route('editpost',[$id=$post['id']])}}"><button>EDIT</button></a>
                    <a href="{{route('deletepost',[$id=$post['id']])}}"><button>DELETE</button></a>
                </div>
                @endif
                @endauth
            </div>

        </div>
        <div class="spacer2"></div>
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <p style="font-size: 20px;">{{$post['content']}}</p>
                    <img src="{{url('/Images/'.$post['image_path'])}}" alt="{{$post['title']}}">
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <h5>Author: {{$post['user_id']}}</h5>
                    <h5>Date Created: {{$post['created_at']}}</h5>
                    <h5>Category: {{$post['cat']}}</h5>

                </div>
            </div>
        </div>

        <div class="spacer2"></div>
        <div class="wel2">
            <div class="row">
                <div class="col-9">
                    <h1>Responses</h1>
                </div>
                <div class="col-3">
                    <a href="{{route('response',[$id=$post->id])}}"><button> Add Response</button></a>
                </div>
            </div>
        </div>
        <div class="spacer2"></div>
        @foreach($comments as $comment)
        <div class="row">
            <div class="col-9">
                    <div class="row">
                        <div class="col-10">
                            <h5>{{$comment->name}}</h5>
                            <h2>{{$comment->content}}</h2>
                        </div>
                        <div class="col-1">
                            @auth
                            @if (auth()->user()->role == "admin" || auth()->user()->id == $comment->user_id)
                            <a href="{{route('deletecomment',[$id=$comment->id])}}"><button>DELETE</button></a>
                            @endif
                            @endauth
                        </div>
                    </div>
                    <div class="spacer2">
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
<div class="fab-container">
    <div class="button iconbutton">
        <a href="#welheading">&uarr;</a>
    </div>
</div>
</div>
@endsection