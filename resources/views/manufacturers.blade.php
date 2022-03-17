@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        
        
      </thead>
      <tbody>
       
        @foreach($manufacturers AS $manufacturer)
        <tr>
          <th>{{ $manufacturer->id }}</th> <br>
          <th>{{ $manufacturer->man_Name }}</th> <br>
          <th>{{ $manufacturer->sales_Info }}</th> <br>
          <th>{{ $manufacturer->tech_Support }}</th>

          
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