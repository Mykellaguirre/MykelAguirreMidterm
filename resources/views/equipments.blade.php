@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="col-md-12">
      <div class = "card card-default">
</div>
            <div class="card-body">
           
              @foreach($equipments AS $equipment)
              <tr>
              <th>{{ $equipment->name }}</th> <br>

          
          <td><a class="btn btn-default btn-sm" href="{{ route('equipments.show',['equipment'=>$equipment->id]) }}">View</a><td>
            <!-- Edit -->
            <td><a href="{{ route('equipments.edit',$equipment->id)}}" class="btn btn-primary">Edit</a><td>
            <td>
                <form action="{{ route('equipments.destroy', $equipment->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                  <td>
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