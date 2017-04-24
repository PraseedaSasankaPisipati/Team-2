@extends('app')
@section('content')
    <h1>Update Property Manager Details</h1>
    {!! Form::model($propertymanager,['method' => 'PATCH','route'=>['propertymanagers.update',$propertymanager->id]])!!}
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