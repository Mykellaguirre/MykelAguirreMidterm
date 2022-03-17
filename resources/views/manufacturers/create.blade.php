@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.store') }}" >
    @csrf
    <x-adminlte-input name="man_Name" label="Manufacturer" />
    <x-adminlte-input name="sales_Info" label="Sales Email" />
    <x-adminlte-input name="tech_Support" label="Tech Support email" />
    
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop