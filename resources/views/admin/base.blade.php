@extends('base')

@section('title')
    Admin dashboard
@endsection

@section('message')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
@endsection