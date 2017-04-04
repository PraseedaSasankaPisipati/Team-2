@extends('app')
@section('content')
    <h1>Update Property Details</h1>
    {!! Form::model($property,['method' => 'PATCH','route'=>['properties.update',$property->id]])!!}
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