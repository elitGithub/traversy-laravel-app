@extends('layouts.app')

@section('content')
    <h1>Posts </h1>
    @if(sizeof($posts) > 0)
    @foreach($posts as $post)
        <div class="card card-body bg-light post-wrapper">
           <h3 class="post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <small class="post-label">Written on: {{ $post->created_at }}</small>
        </div>
    @endforeach
        {{ $posts->links() }}
    @else
    <p>No posts founds</p>
    @endif
@endsection
