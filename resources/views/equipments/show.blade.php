@extends('adminlte::page')

@section('title', '{{$equipment->name}}')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
 <div class = "row">
   <div class = "col-md-12">
     <div class="card card-primary">
       <div class = "card-body">
         


         <b>Name</b> {{ $equipment->name}} |
          <b>Manufacturer</b> <a href="{{ route('manufacturers.show',['manufacturer'=>$equipment->manufacturer->id]) }}"    >   {{$equipment->manufacturer->man_Name}}</a>
            <b>Price</b> {{$equipment->price}} |
            <b>Category</b> <a href="{{ route('types.show',['type'=>$equipment->type->id]) }}" > {{$equipment->type->category}} |</a>
            <b>Processor</b>  {{$equipment->processor}} |
            <b>Screen Size</b> {{$equipment->screen_size}}|
            <b>Battery Life</b>  {{$equipment->battery}} |
            <b>Invoice#</b> {{$equipment->invoice_id }} |
            <b>User</b>  <a href="{{ route('notes.show',['note'=>$equipment->note->id]) }}">{{$equipment->note->employee}} Employee That Purchased </a>

 
  
@stop
