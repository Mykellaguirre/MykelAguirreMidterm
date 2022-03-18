@extends('adminlte::page')

@section('title', 'Type')

@section('content_header')
    <h1>Type</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
        <th style="width: 10px">#</th><th>Category</th>
      </tr>
        
        
      </thead>
      <tbody>
       
        @foreach($types AS $type)
        <tr>
          <th>{{ type->id }}</th> <br>
          <th>{{ type->category }}</th>
   
          
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacturers.show',['manufacturer'=>$manufacturer->id]) }}">View</a></td>
        </tr>
        @endforeach

      

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturers.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop