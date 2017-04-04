@extends('app')
@section('content')
    <h1>Update Worker Details</h1>
    {!! Form::model($worker,['method' => 'PATCH','route'=>['workers.update',$worker->id]])!!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop