@extends('admin.base')

@section('content')

    <a href="{{ route('admin.posts.create') }}">Create a post</a>

    @foreach ($posts as $post)
        @include('parts.post_preview', ['post' => $post, 'post_link' => route('admin.posts.show', $post->_id)])

        <a href="{{ route('admin.posts.edit', $post->_id) }}">Edit</a> /
        <a href="{{ route('admin.posts.delete', $post->_id) }}">Delete</a>
    @endforeach

@endsection