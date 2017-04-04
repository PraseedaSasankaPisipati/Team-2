@extends('app')
@section('content')
    <h1>Update Building Details</h1>
    {!! Form::model($building,['method' => 'PATCH','route'=>['buildings.update',$building->id]])!!}
   <div class="form-group">
        {!! Form::label('building_name', 'Building Name:') !!}
        {!! Form::text('building_name',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('building_address', 'Building Address:') !!}
        {!! Form::text('building_address',null,['class'=>'form-control']) !!}
    </div>  
    <div class="form-group">
        {!! Form::label('number_of_apartments', 'Number Of Apartments:') !!}
        {!! Form::text('number_of_apartments',null,['class'=>'form-control']) !!}
    </div> 
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop