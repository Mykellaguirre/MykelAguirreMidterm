@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<h3>Edit Manufacturer</h3>

<div class="row">

   <div class="col-md-12 col-sm-12 col-xs-12">

     <!-- Alert message (start) -->
     @if(Session::has('message'))
     <div class="alert {{ Session::get('alert-class') }}">
        {{ Session::get('message') }}
     </div>
     @endif
     <!-- Alert message (end) -->

     <div class="actionbutton">

        <a class='btn btn-info float-right' href="{{route('manufacturers')}}">List</a>

     </div>

     <form action="{{route('manufacturers.update',[$manufacturer->id])}}" method="post" >
{{csrf_field()}}

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="man_Name">Name <span class="required">*</span></label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="man_Name" class="form-control col-md-12 col-xs-12" name="name" placeholder="Enter Manufacturer name" required="required" type="text" value="{{old('man_Name',$manufacturer->man_Name)}}">

            @if ($errors->has('man_Name'))
               <span class="errormsg">{{ $errors->first('man_Name') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description
</label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name='sales_Info' id='sales_Info' class='form-control' placeholder="Enter description">{{old('sales_Info',$manufacturer->sales_Info)}}</textarea>

            @if ($errors->has('sales_Info'))
               <span class="errormsg">{{ $errors->first('sales_Info') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
          <div class="col-md-6">
            <input type="submit" name="submit" value='Submit' class='btn btn-success'>
          </div>
       </div>

     </form>

   </div>
</div>


@stop