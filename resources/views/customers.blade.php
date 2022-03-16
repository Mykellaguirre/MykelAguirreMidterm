@extends('adminlte::page')

@section('title', 'Customer List')

@section('content_header')
    <h1>Customer List</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Customer Name</th><th>Email</th></th>Phone Number</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($customers AS $customer)
        <tr>
          <td>{{ $customer->Customer_Name }}</td>
          <td>{{ $customer->Email }}</td>
          <td>{{ $customer->Phone_Number }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('customers.show',['customers'=>$customers->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('customers.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
