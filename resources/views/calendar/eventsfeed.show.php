@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <div><p>{{ $calendar->start_at; }}% finished</p></div>
@stop