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
          <b>Manufacturer</b> <a href="{{ route('manufacturers.show',['manufacturer'=>$manufacturer->id]) }}"    >   {{$equipment->manufacturer->man_Name}}</a>
            <b>Price</b> {{$equipment->price}} |
            <b>Category</b>  {{$equipment->type->category}} |
            <b>Processor</b>  {{$equipment->processor}} |
            <b>Screen Size</b> {{$equipment->screen_size}}|
            <b>Battery Life</b>  {{$equipment->battery}} |
            <b>Invoice#</b> {{$equipment->invoice_id }} |
            <b>User</b>  {{$equipment->note->employee}} |

 
  
@stop
