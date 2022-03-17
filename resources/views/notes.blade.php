@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>note</th><th style="width: 40px">
        </tr>
      </thead>
      <tbody>
        $notes
        $note

        @foreach($notes AS $note)
        <tr>
          <td>{{ $note->id }}</td>
          <td>{{ $note->note }}</td>
          
          <td><a class="btn btn-default btn-sm" href="{{ route('notes.show',['note'=>$note->id]) }}">View</a></td>
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