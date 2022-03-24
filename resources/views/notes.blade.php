@extends('adminlte::page')

@section('title', 'Employees')

@section('content_header')
    <h1>Employees</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Employee</th><th>Contact Info</th><th style="width: 40px">
        </tr>
      </thead>
      <tbody>
      

        @foreach($notes AS $note)
        <tr>
          <td>{{ $note->id }}</td>
          <td>{{ $note->note }}</td>
          <td>{{ $note->contact }}</td>

          
          <td><a class="btn btn-default btn-sm" href="{{ route('notes.show',['note'=>$note->id]) }}">View</a></td>
          <td><a href="{{ route('notes.edit',$note->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('notes.destroy', $note->id)}}" method="post">
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
<a href="{{ route('notes.create') }} " class="btn btn-primary" >Create</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop