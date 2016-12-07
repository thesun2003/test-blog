@extends('base')

@section('title')
    Public part
@endsection

@section('content')

    @foreach ($posts as $post)
        @include('parts.post_preview', ['post' => $post, 'post_link' => route('public.show', $post->_id)])
    @endforeach

@endsection