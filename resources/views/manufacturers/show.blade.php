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

  <h2>{{ $manufacturer->man_Name; }}</h2>
  <h2>{{ $manufacturer->sales_Info; }}</h2>
  <h2>{{ $manufacturer->tech_Support; }}</h2>

 
  
@stop
