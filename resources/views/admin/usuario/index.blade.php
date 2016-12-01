@extends('layouts.principal')

@section('title', 'index')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <span>Esteban</span>

@stop