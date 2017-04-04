@extends('app')
@section('content')
 <h1>Add New Building</h1>
  {!! Form::open(['url' => 'buildingmanagers']) !!}
  <div class="form-group">
        {!! Form::label('buildingmanager_name', 'Building Manager Name:') !!}
        {!! Form::text('buildingmanager_name',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('buildingmanager_mobilephone', 'Building Manager Phone:') !!}
        {!! Form::text('buildingmanager_mobilephone',null,['class'=>'form-control']) !!}
    </div>  
    <div class="form-group">
        {!! Form::label('buildingmanager_email', 'Building Manager Email:') !!}
        {!! Form::text('buildingmanager_email',null,['class'=>'form-control']) !!}
    </div> 
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop