@extends('app')
@section('content')
 <h1>Create New Complaint</h1>
  {!! Form::open(['url' => 'complaints']) !!}
  <h4> <b> Building Name</h4>
 <div class="form-group">
        {!! Form::select('building_id', $buildings) !!}
    </div>
  <div class="form-group">
        {!! Form::label('customer_name', 'Customer Name:') !!}
        {!! Form::text('customer_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('customer_email', 'Customer Email:') !!}
        {!! Form::text('customer_email',null,['class'=>'form-control']) !!}
    <div class="form-group">
        {!! Form::label('customer_mobilephone', 'Customer Mobile Phone:') !!}
        {!! Form::text('customer_mobilephone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('customer_aptphone', 'Customer Apt Phone:') !!}
        {!! Form::text('customer_aptphone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('customer_complaint', 'Customer Complaint:') !!}
        {!! Form::text('customer_complaint',null,['class'=>'form-control']) !!}
    </div>
	  <div class="form-group">
        {!! Form::label('customer_address', 'Customer Address:') !!}
        {!! Form::text('customer_address',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop