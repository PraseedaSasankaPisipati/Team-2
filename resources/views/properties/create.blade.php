@extends('app')
@section('content')
 <h1>Add New Property</h1>
  {!! Form::open(['url' => 'properties']) !!}
  <div class="form-group">
        {!! Form::label('property_name', 'Property Name:') !!}
        {!! Form::text('property_name',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('property_address', 'Property Address:') !!}
        {!! Form::text('property_address',null,['class'=>'form-control']) !!}
    </div>  
    <div class="form-group">
        {!! Form::label('number_of_buildings', 'Number Of Buildings:') !!}
        {!! Form::text('number_of_buildings',null,['class'=>'form-control']) !!}
    </div> 
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop