@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
  <h2>{{ $manufacturer->man_Name; }}</h2>
  <h2>{{ $manufacturer->sales_Info; }}</h2>
  <h2>{{ $manufacturer->tech_Support; }}</h2>

 
  
@stop
