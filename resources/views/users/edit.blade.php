@extends('app')
@section('content')
    <h1>Update User Details</h1>
    {!! Form::model($user,['method' => 'PATCH','route'=>['users.update',$user->id]])!!}
    <div class="form-group">
        {!! Form::label('name', 'User Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'User Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
 
						<label class="col-md-4 control-label">Select Role </label>
						{{ Form::select('role', [
   'pman' => 'Property Manager',
   'bman' => 'Building Manager',
   'work' => 'Worker'],['class' => 'form-control']
) }}
    </div>   
<div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop