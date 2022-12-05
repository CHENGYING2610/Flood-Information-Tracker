@extends('layouts.app')

@section('content')

<div class="container">
    <div id="welheading" class="wel2">
        <h1>Response to {{$post['title']}}</h1>
    </div>
    <form method="POST" action="/addcomment">
        @csrf
        <div class="row">
            <div class="spacer2"></div>
            <label for="content" class="col-3">{{ __('Response detail') }}</label>
            <textarea id="content" name="content" rows="10" cols="20"></textarea>
        </div>
        <input type="hidden" name="post_id" value="{{$post['id']}}">
        @auth
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        @endauth
        <div class="row">
            <div class="spacer2"></div>
            <button type="submit">Add Response</button>
        </div>
    </form>
    <div class="spacer"></div>
</div>
</div>

@endsection