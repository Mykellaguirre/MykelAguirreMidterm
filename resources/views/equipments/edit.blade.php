@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.update', $equipment->id) }}">
        @method('PATCH')
          @csrf
         
          <div class="form-group">    
              <label for="name">Name:*</label>
              <input type="text" class="form-control" name="name"/>
          </div>
 
          <div class="form-group">
              <label for="price">Price:*</label>
              <input type="text" class="form-control" name="price"/>
          </div>
 
          <div class="form-group">
              <label for="invoice_id">Invoice#:</label>
              <input type="text" class="form-control" name="invoice_id"/>
          </div>

          
        
          <div class="form-group">    
              <label for="processor">processor:*</label>
              <input type="text" class="form-control" name="processor"/>
          </div>
 
          <div class="form-group">
              <label for="screen_size">Screen Size:*</label>
              <input type="text" class="form-control" name="screen_size"/>
          </div>
 
          <div class="form-group">
              <label for="battery">Battery:</label>
              <input type="text" class="form-control" name="battery"/>
          </div>
  
    
    
   



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
        <select name = "note_id" label = "Employee">
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