@extends('app')
@section('content')
            
    <h1>Update Work Order</h1>
	{!! Form::model($workorders,['method' => 'PATCH','route'=>['workorders.update',$workorders->id]]) !!}
 
	<h4><b> Workers </h4>
   <div class="form-group">
        {!! Form::select('worker_id', $workers) !!}          
    </div>
	<h4> <b> Complaint Id</h4>
	<div class="form-group">
        {!! Form::select('id', $complaints) !!}          

    </div>
    <div class="form-group">
        {!! Form::label('worker_mobilephone', 'Worker Mobile Phone:') !!}
        {!! Form::text('worker_mobilephone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('order_description', 'Work Order Description:') !!}
        {!! Form::text('order_description',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('order_est_cost', 'Work Order Estimated Cost:') !!}
        {!! Form::text('order_est_cost',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('order_actual_cost', 'Work Order Actual Cost:') !!}
        {!! Form::text('order_actual_cost',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('order_date', 'Work Order Date:') !!}
        {!! Form::text('order_date',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('order_completion_date', 'Work Order Completion Date:') !!}
        {!! Form::text('order_completion_date',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::select('order_status', [
   'Initiated' => 'Initiated',
   'Under review' => 'Under review',
   'Assigned' => 'Assigned',
   'Work In Progress' => 'Work In Progress',
   'Completed' => 'Completed']) !!} </div>
    <div class="form-group">
	<div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop