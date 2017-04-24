@extends('app')
@section('content')
 <h1>Add New Property Manager</h1>
  {!! Form::open(['url' => 'propertymanagers']) !!}
  <div class="form-group">
        {!! Form::label('propertymanager_name', 'Property Manager Name:') !!}
        {!! Form::text('propertymanager_name',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('propertymanager_mobilephone', 'Property Manager Phone:') !!}
        {!! Form::text('propertymanager_mobilephone',null,['class'=>'form-control']) !!}
    </div>  
    <div class="form-group">
        {!! Form::label('propertymanager_email', 'Property Manager Email:') !!}
        {!! Form::text('propertymanager_email',null,['class'=>'form-control']) !!}
    </div> 
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop