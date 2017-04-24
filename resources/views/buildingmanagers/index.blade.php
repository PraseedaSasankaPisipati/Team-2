@extends('app')
@section('content')
<marquee behavior="scroll" direction="left"><h3>Welcome to Mercy Affordable Housing..!</h3></marquee>
    <h1>Building Manager Details</h1>
	<table>
	@if (Auth::user()->role!=='bman')
    <a href="{{url('/buildingmanagers/create')}}" class="btn btn-success">Add Building Manager</a>
@endif
<tr>
<td style="padding:0 875px 0 875px;"><a href="{{ URL::to('downloadExcel/buildingmanagers/xlsx') }}"><button class="btn btn-success">Download Excel</button></a> </td>
</tr></table>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		
            <th>Building Manager Name</th>
            <th>Building Manager Email</th>
            <th>Building Manager PhoneNumber</th>
        <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
		
	
        @foreach ($buildingmanagers as $buildingmanager)
            <tr>
                <td>{{ $buildingmanager->buildingmanager_name }}</td>
                <td>{{ $buildingmanager->buildingmanager_mobilephone }}</td>
                <td>{{ $buildingmanager->buildingmanager_email }}</td>
                <td><a href="{{url('buildingmanagers',$buildingmanager->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('buildingmanagers.edit',$buildingmanager->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['buildingmanagers.destroy', $buildingmanager->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection