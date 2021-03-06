@extends('app')
@section('content')
 <h1>Create New WorkOrder</h1>
  {!! Form::open(['url' => 'workorders']) !!}
  <h4><b> Workers </h4>
   <div class="form-group">
        {!! Form::select('worker_id', $workers) !!}          
    </div>
	<h4> <b> Complaint Id</h4>
	<div class="form-group">
        {!! Form::select('complaint_id', $complaints) !!}          

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
		<input type="text" id="datepicker" name="order_date" class="form-control"> 
    </div>
	<div class="form-group">
        {!! Form::label('order_completion_date', 'Work Order Completion Date:') !!}
        <input type="text" id="datepicker2" name="order_completion_date" class="form-control"> 

    </div>
        <div class="form-group">
        {!! Form::label('order_status', 'Status:') !!}
    {!! Form::select('order_status', [
   'Initiated' => 'Initiated',
   'Under review' => 'Under review',
   'Assigned' => 'Assigned',
   'Work In Progress' => 'Work In Progress',
   'Completed' => 'Completed']) !!} </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop