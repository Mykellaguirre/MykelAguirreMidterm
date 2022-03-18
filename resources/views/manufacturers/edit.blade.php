@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.update', $manufacturer->id) }}">
        @method('PATCH')
          @csrf
          <div class="form-group">    
              <label for="man_Name">Manufacturer:*</label>
              <input type="text" class="form-control" name="man_Name"/>
          </div>
 
          <div class="form-group">
              <label for="sales_Info">Sales Info:*</label>
              <input type="text" class="form-control" name="sales_Info"/>
          </div>
 
          <div class="form-group">
              <label for="tech_Support">Tech Support:</label>
              <input type="text" class="form-control" name="tech_Support"/>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
@stop