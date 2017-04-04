@extends('app')
@section('content')
 <h1>Add New Worker</h1>
  {!! Form::open(['url' => 'workers']) !!}
  <div class="form-group">
        {!! Form::label('worker_name', 'Worker Name:') !!}
        {!! Form::text('worker_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('worker_mobilephone', 'Worker Mobile Phone:') !!}
        {!! Form::text('worker_mobilephone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('worker_skills', 'Worker Skills:') !!}
        {!! Form::text('worker_skills',null,['class'=>'form-control']) !!}
    </div>   
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop