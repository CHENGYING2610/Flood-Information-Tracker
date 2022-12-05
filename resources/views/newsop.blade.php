@extends('layouts.app')

@section('content')

<div class="container">
    <div id="welheading" class="wel2">
        <h1>Create New SOP</h1>
    </div>
    <form method="POST" action="/addsop">
        @csrf
        <div class="row">
            <div class="spacer2"></div>
            <label for="title" class="col-3">{{ __('Title') }}</label>
            <textarea id="title" name="title" rows="10" cols="20"></textarea>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="details" class="col-3">{{ __('Embed code') }}</label>
            <textarea id="details" name="details" rows="10" cols="20"></textarea>
        </div>
        
        @auth
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        @endauth
        <div class="row">
            <div class="spacer2"></div>
            <button type="submit">Add SOP</button>
        </div>
    </form>
    <div class="spacer"></div>
</div>
</div>

@endsection