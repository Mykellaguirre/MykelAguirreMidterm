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
              <label for="name">Name:*</label>
              <input type="text" class="form-control" name="name"/>
          </div>
 
          <div class="form-group">
              <label for="note_note">employee*</label>
              <input type="text" class="form-control" name="note_note"/>
          </div>
 
          <div class="form-group">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price"/>
          </div>

          <div class="form-group">
              <label for="manufacturer_man_Name">Manufacturer:</label>
              <input type="text" class="form-control" name="manufacturer_man_Name"/>
          </div>

          <div class="form-group">
              <label for="type_category">Category:</label>
              <input type="text" class="form-control" name="type_category"/>
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