@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer edit</h1>
@stop

@section('content')
<h1>Edit Post</h1>
    {!! Form::open(['action' => ['ManufacturerController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('man_Name', 'man_Name')}}
            {{Form::text('man_Name', $post->man_Name, ['class' => 'form-control', 'placeholder' => 'man_Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('sales_Info', 'sales_Info')}}
            {{Form::textarea('sales_Info', $post->sales_Info, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'sales_Info'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@stop

     