@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customer List</h1>
@stop

@section('content')
<form method="post" action="{{ route('customers.store') }}" >
    @csrf
    <x-adminlte-input name="Customer_Name" label="Customer_Name" />
    <x-adminlte-input name="Email" label="Email" />
    <x-adminlte-input name="Phone_Number" label="Phone_Number" />
    
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop