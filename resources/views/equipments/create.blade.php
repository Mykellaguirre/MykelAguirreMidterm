@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:*</label>
              <input type="text" class="form-control" name="name"/>
          </div>
 
          <div class="form-group">
              <label for="note_id">employee*</label>
              <input type="text" class="form-control" name="note_id"/>
          </div>
 
          <div class="form-group">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price"/>
          </div>

          <div class="form-group">
              <label for="manufacturer_id">Manufacturer:</label>
              <input type="text" class="form-control" name="manufacturer_id"/>
          </div>

          <div class="form-group">
              <label for="type_id">Category:</label>
              <input type="text" class="form-control" name="type_id"/>
          </div>

          <div class="form-group">
              <label for="invoice_Num">Invoice Number:</label>
              <input type="text" class="form-control" name="invoice_Num"/>
          </div>

          <div class="form-group">
              <label for="specs">Specs:</label>
              <input type="text" class="form-control" name="specs"/>
          </div>

          <button type="submit" class="btn btn-primary">Add Equipment</button>
      </form>
  </div>
</div>
</div>
@stop