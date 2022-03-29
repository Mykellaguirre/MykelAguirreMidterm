@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')

<div class = "row">
   <div class = "col-md-12">
     <div class="card card-primary">
       <div class = "card-body">

    
            <b>Manufacturer</b> {{$manufacturer->man_Name}}|
            <b>Sales Info</b>  {{$manufacturer->sales_Info}} |
            <b>Tech Support Info</b>  {{$manufacturer->tech_Support}} |


            <select name = "equipment_id" label = "Equipment">
          @foreach($manufacturer->equipments as $equipment)
            <option value="{{ $equipment->id }}">{{ $equipment->name }}</option>
          @endforeach
        </select>

           




            



 
  
@stop
