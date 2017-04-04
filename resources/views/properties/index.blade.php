@extends('app')
@section('content')

    <h1>View Properties</h1>
	<table>
	<tr>
    <td><a href="{{url('/properties/create')}}" class="btn btn-success">Add Property</a></td>
	<td style="padding:0 875px 0 875px;"><a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel</button></a></td></tr></table>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		
            <th>Property Name</th>
            <th>Property Address</th>
            <th>Number Of Buildings</th>
        <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($properties as $property)
            <tr>
                <td>{{ $property->property_name }}</td>
                <td>{{ $property->property_address }}</td>
                <td>{{ $property->number_of_buildings }}</td>
                <td><a href="{{url('properties',$property->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('properties.edit',$property->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['properties.destroy', $property->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection