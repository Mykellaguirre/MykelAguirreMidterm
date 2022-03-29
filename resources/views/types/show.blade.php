@extends('adminlte::page')

@section('title', 'Types')

@section('content_header')
    <h1>Types</h1>
@stop

@section('content')
  <h2>{{ $type->category; }}</h2>

  @foreach($type->equipment AS $equip)
            <li> {{$equip->name}} </li>
            @endforeach
  
@stop