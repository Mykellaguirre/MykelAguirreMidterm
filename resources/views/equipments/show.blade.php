@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
  <h2>{{ $equipment->name; }}</h2>
  <h2>{{ $equipment->note_id; }}</h2>
  <h2>{{ $equipment->price; }}</h2>
  <h2>{{ $equipment->manufacturer_id; }}</h2>
  <h2>{{ $equipment->type_id; }}</h2>
  <h2>{{ $equipment->invoice_Num; }}</h2>
  <h2>{{ $equipment->specs; }}</h2>


 
  
@stop
