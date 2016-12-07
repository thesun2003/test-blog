@extends('base')

@section('content')

    <a href="{{ route('public.index') }}">Back to list</a>

    @include('parts.post', ['post' => $post])

@endsection