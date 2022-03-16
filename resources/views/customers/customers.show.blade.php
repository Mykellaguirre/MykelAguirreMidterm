@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customer List</h1>
@stop

@section('content')
  <h2>{{ $customers->Customer_Name; }}</h2>
  <h2>{{ $customers->Email; }}</h2>
  <h2>{{ $customers->Phone_Number; }}</h2>
  
@stop
