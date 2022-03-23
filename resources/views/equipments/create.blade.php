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
<form method="post" action="{{ route('equipments.store') }}">
          @csrf
          <div class="col-md">
    <div class="form-group">
      <label>Manufacturer</label>
      <div class="select2-purple">
        <select class="select2" multiple="multiple" data-placeholder="Select a Technician" data- 
                  dropdown-css-class="select2-purple" style="width: 100%;">
          @foreach($manufacturers as $manufacturer)
            <option value="{{ $manufacturer->id }}">{{ $manufacturer->man_Name }}</option>
          @endforeach
        </select>
      </div>
    </div>
</div>
</form>




    


              

              

        
     
  </div>
</div>
</div>
@stop