@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.store') }}">
          @csrf
          <div class="row">    
              <x-adminlte-input name="name" label= "Name" class= "form-group"/>

              

              <x-adminlte-input name="price" label="Price" class= "form-group"/>
              <x-adminlte-input name="invoice_Num" label= "Invoice#" class= "form-group"/>
              <x-adminlte-input name="processor" label= "Processor" class= "form-group"/>
              <x-adminlte-input name="screen_Size" label= "Screen Size" class= "form-group"/>
              <x-adminlte-input name="battery" label= "Battery Life" class= "form-group"/>

              <x-adminlte-select name= "type_id" label = "Category" class= "form-group">
              @foreach ($types as $type)
                <option value  ="{{ $type->id}}">{{ $type->category}} </option>
                @endforeach
              </x-adminlte-select>

              <x-adminlte-select name= "note_id" label = "Employee" class= "form-group">
              @foreach ($notes as $note)
                <option value  ="{{ $note->id}}">{{ $note->employee}} </option>
                @endforeach
              </x-adminlte-select>

              <button type="submit" class="btn btn-primary">Add Equipment</button>
</form>




    


              

              

        
     
  </div>
</div>
</div>
@stop