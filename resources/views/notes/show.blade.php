@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')

<div class = "row">
   <div class = "col-md-12">
     <div class="card card-primary">
       <div class = "card-body">

    
            <b>Employee</b> {{$note->note}}|
            <b>Contact Info</b>  {{$note->contact}} |

            @foreach($note->equipment AS $equip)
            <li> {{$equip->name}} </li>
            @endforeach



  
@stop