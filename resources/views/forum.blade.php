@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" width="100%">
        <div id="welheading" class="wel1">
            <h1>Discussion Forum</h1>
        </div>
        <div class="wel3">
            <ul>
                <li><a href="{{route('forum')}}" class="<?php if ($selection == "all") { echo "active"; } ?>"><h1>All Posts</h1></a></li>
                <li><a href="{{route('general')}}" class="<?php if ($selection == "general") { echo "active"; } ?>"><h1>General</h1></a></li>
                <li><a href="{{route('donation')}}" class="<?php if ($selection == "donation") { echo "active"; } ?>"><h1>Donation</h1></a></li>
                <li><a href="{{route('recuitment')}}" class="<?php if ($selection == "recuitment") { echo "active"; } ?>"><h1>Recruitment</h1></a></li>
                <li><a href="{{route('lostfound')}}" class="<?php if ($selection == "lostfound") { echo "active"; } ?>"><h1>Lost&Found</h1></a></li>
                <li><a href="{{route('urgent')}}" class="<?php if ($selection == "urgent") { echo "active"; } ?>"><h1>Urgent</h1></a></li>
            </ul>
        </div>
        <div class="spacer2"></div>
        @foreach($posts as $post)
        <div class="card">
            <h1><a href="{{route('post',[$id=$post->id])}}">{{$post->title}}</a></h1>
            <h5>Author: {{$post->user_id}}</h5>
            <h5>Date Created: {{$post->created_at}}</h5>
            <h5>Category: {{$post->cat}}</h5>
            <p>Detail: {{$post->content}}</p>
        </div>
        <div class="spacer2"></div>
        @endforeach
    </div>
    <div class="fab-container">
        <div class="button iconbutton">
            <a href="{{ route('createpost') }}">+</a>
        </div>
    </div>
</div>
@endsection