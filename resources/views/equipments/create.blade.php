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

          <input for="name" >Equipment Name</label>
  
    
    
   



          <div class="col-md">
    <div class="form-group">
      <label>Manufacturer</label>
      <div class="select2-purple">
        <select name = "manufacturer_id" label = "Manufacturer">
          @foreach($manufacturers as $manufacturer)
            <option value="{{ $manufacturer->id }}">{{ $manufacturer->man_Name }}</option>
          @endforeach
        </select>

   <div class="col-md">
    <div class="form-group">
        <label>Category</label>
      <div class="select2-purple">
        <select name = "type_id" label = "Category">
          @foreach($types as $type)
            <option value="{{ $type->id }}">{{ $type->category }}</option>
          @endforeach
        </select>

        <div class="col-md">
    <div class="form-group">
        <label>User</label>
      <div class="select2-purple">
        <select name = "note_id" label = "User">
          @foreach($notes as $note)
            <option value="{{ $note->id }}">{{ $note->employee }}</option>
          @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Add Equipment</button>
</div>


      </div>
    </div>
</div>
</div>
</form>




    


              

              

        
     
  </div>
</div>
</div>
@stop