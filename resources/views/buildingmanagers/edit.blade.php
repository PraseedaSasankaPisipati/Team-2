@extends('app')
@section('content')
    <h1>Update Building Details</h1>
    {!! Form::model($buildingmanager,['method' => 'PATCH','route'=>['buildingmanagers.update',$buildingmanager->id]])!!}
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