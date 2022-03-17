@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<form method="post" action="{{ route('notes.store') }}" >
    @csrf
    <x-adminlte-input name="note" label="Note" />
 
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop