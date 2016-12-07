@extends('admin.base')

@section('content')

    <a href="{{ route('admin.posts.index') }}">Back to list</a>

    @include('parts.post', ['post' => $post])

    <a href="{{ route('admin.posts.edit', $post->_id) }}">Edit</a> /
    <a href="{{ route('admin.posts.delete', $post->_id) }}">Delete</a>

@endsection