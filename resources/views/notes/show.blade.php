@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
  <h2>{{ $note->note; }}</h2>
  
@stop