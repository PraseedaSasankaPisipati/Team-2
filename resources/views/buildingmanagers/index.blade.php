@extends('app')
@section('content')

    <h1>View Building Details</h1>
    <a href="{{url('/buildings/create')}}" class="btn btn-success">Add Building</a>
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
                <td><a href="{{url('buildings',$building->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('buildings.edit',$building->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['buildings.destroy', $building->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection