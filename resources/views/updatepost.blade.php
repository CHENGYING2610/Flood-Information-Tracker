@extends('layouts.app')

@section('content')

<div class="container">
    <div id="welheading" class="wel2">
        <h1>Update New Post</h1>
    </div>
    <form method="POST" action="/updatepost" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="spacer2"></div>
            <label for="title" class="col-3">{{ __('Title') }}</label>
            <textarea id="title" name="title" rows="10" cols="20">{{$post['title']}}</textarea>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="content" class="col-3">{{ __('Content') }}</label>
            <textarea id="content" name="content" rows="10" cols="20">{{$post['content']}}</textarea>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="cat" class="col-3">{{ __('Category') }}</label>
            <div class="col-8">
                <select name="cat" id="cat" class="form-control @error('cat') is-invalid @enderror" name="cat" class="col-8">
                    <option value="general" @if ($post->cat == "general") {{ 'selected' }} @endif>General</option>
                    <option value="donation" @if ($post->cat == "donation") {{ 'selected' }} @endif>Donation</option>
                    <option value="recuitment" @if ($post->cat == "recuitment") {{ 'selected' }} @endif>Recuitment</option>
                    <option value="lostfound" @if ($post->cat == "lostfound") {{ 'selected' }} @endif>Lost&Found</option>
                    <option value="urgent" @if ($post->cat == "urgent") {{ 'selected' }} @endif>Urgent</option>
                </select>
                @error('cat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="image" class="col-3">{{ __('Image') }}</label>
            <input type="file" class="form-control" id="image" required name="image"></input>
        </div>
        @auth
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <input type="hidden" name="post_id" value="{{$post['id']}}">
        @endauth
        <div class="row">
            <div class="spacer2"></div>
            <button type="submit">Edit Post</button>
        </div>
    </form>
    <div class="spacer"></div>
</div>
</div>

@endsection