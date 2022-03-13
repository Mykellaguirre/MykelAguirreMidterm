@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>New Events</h1>
@stop

@section('content')
<form method="post" action="{{ route('todos.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start" type="datetime_local" label="Start" />
    <x-adminlte-input name="end" type="datetime_local" label="End" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop