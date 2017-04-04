@extends('app')
@section('content')
    <h1>Update Complaint</h1>
    {!! Form::model($complaint,['method' => 'PATCH','route'=>['complaints.update',$complaint->id]]) !!}
    <div class="form-group">
        {!! Form::label('customer_name', 'Customer Name:') !!}
        {!! Form::text('customer_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('customer_email', 'Customer Email:') !!}
        {!! Form::text('customer_email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('customer_mobilephone', 'Customer Mobile Phone:') !!}
        {!! Form::text('customer_mobilephone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('customer_aptphone', 'Cutomer Apt Phone:') !!}
        {!! Form::text('customer_aptphone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
{!! Form::label('customer_complaint', 'Cusomter Complaint:') !!}
        {!! Form::text('customer_complaint',null,['class'=>'form-control']) !!}
    </div>
	
	<div class="form-group">
{!! Form::label('customer_address', 'Cusomter Address:') !!}
        {!! Form::text('customer_address',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop