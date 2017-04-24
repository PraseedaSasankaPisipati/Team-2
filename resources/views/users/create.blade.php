@extends('app')
@section('content')
 <h1>Add New User</h1>
  {!! Form::open(['url' => 'users']) !!}
  <div class="form-group">
        {!! Form::label('name', 'User Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'User Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
	 <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}
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
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop