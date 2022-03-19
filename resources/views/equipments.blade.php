@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
        <th style="width: 10px">#</th><th>Name</th><th>Employee</th><th style="width: 10px">Price</th><th>Manufacturer</th><th>Category</th><th style="width: 10px">Invoice</th><th>Specs</th>
      </tr>
        
        
      </thead>
      <tbody>
       
        @foreach($equipments AS $equipment)
        <tr>
          <th>{{ $equipment->id }}</th> <br>
          <th>{{ $equipment->name }}</th> <br>
          <th>{{ $equipment->note_id}}</th> <br>
          <th>{{ $equipment->price }}</th> <br>
          <th>{{ $equipment->manufacturer_id }}</th> <br>
          <th>{{ $equipment->type_id }}</th> <br>
          <th>{{ $equipment->invoice_Num }}</th> <br>
          <th>{{ $equipment->specs }}</th> 

          
          <td><a class="btn btn-default btn-sm" href="{{ route('equipments.show',['equipment'=>$equipment->id]) }}">View</a></td>
            <!-- Edit -->
            <td><a href="{{ route('equipments.edit',$equipment->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('equipments.destroy', $equipment->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
        </tr>
        @endforeach

      

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipments.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop