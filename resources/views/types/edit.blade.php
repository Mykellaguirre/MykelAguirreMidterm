@extends('adminlte::page')

@section('title', 'Type')

@section('content_header')
    <h1>Type</h1>
@stop

@section('content')
<form method="post" action="{{ route('types.update', $type->id) }}">
        @method('PATCH')
        @csrf
          <div class="form-group">    
              <label for="category">Employee:*</label>
              <input type="text" class="form-control" name="category"/>
          </div>
 
       
          <button type="submit" class="btn btn-primary">Add category</button>
      </form>
  </div>
</div>
</div>
@stop