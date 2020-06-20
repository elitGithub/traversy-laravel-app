@extends('layouts.app')

@section('content')
    <h1>Posts </h1>
    @if(sizeof($posts) > 0)
    @foreach($posts as $post)
        <div class="card card-body bg-light post-wrapper">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width: 100%" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small class="post-label">Written on: {{ $post->created_at }} by {{ $post->user->name }}</small>
                </div>
            </div>
        </div>
    @endforeach
        {{ $posts->links() }}
    @else
    <p>No posts founds</p>
    @endif
@endsection
