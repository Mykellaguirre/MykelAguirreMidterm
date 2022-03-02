@extends('adminlte::page')

@section('title', 'Error')

@section('content_header')
    <h1>ERROR 404</h1>
@stop

@section('content')
    <p>404 error please search another page.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


