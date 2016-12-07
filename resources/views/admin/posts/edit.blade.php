@extends('admin.base')

@section('content')
    <a href="{{ route('admin.posts.index') }}">Back to list</a>

    <h2>
        @if ($post->_id) Edit @else Create @endif post
    </h2>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($post, ['action' => ['AdminPostController@update', $post->_id]]) !!}
        <div>{!! Form::label('title', 'Title') !!}</div>
        <div>{!! Form::text('title', $post->title) !!}</div>
        <div>{!! Form::label('content', 'Content') !!}</div>
        <div>{!! Form::textarea('content', $post->content) !!}</div>
        <div>{!! Form::submit('Save') !!}</div>
    {!! Form::close() !!}

@endsection

@section('external_js')
    <script src="//cdn.ckeditor.com/4.6.0/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
