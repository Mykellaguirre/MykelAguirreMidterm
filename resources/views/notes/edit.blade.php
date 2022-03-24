@extends('adminlte::page')

@section('title', 'Employees')

@section('content_header')
    <h1>Employees</h1>
@stop

@section('content')
<form method="post" action="{{ route('notes.update', $note->id) }}">
        @method('PATCH')
        @csrf
          <div class="form-group">    
              <label for="note">Employee:*</label>
              <input type="text" class="form-control" name="note"/>
          </div>

          <div class="form-group">    
              <label for="contact">Contact Info*</label>
              <input type="text" class="form-control" name="contact"/>
          </div>
 
       
          <button type="submit" class="btn btn-primary">Add employee</button>
      </form>
  </div>
</div>
</div>
@stop