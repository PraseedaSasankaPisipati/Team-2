@extends('app')
@section('content')
<marquee behavior="scroll" direction="left"><h3>Welcome to Mercy Affordable Housing..!</h3></marquee>
    <h1>Property Details</h1>
	<table>
	<tr>
	@if (Auth::user()->role!=='pman')
    <td><a href="{{url('/properties/create')}}" class="btn btn-success">Add Property</a></td>
    @endif
	<td style="padding:0 10px 0 10px;"><a href="{{ URL::to('downloadExcel/properties/xls') }}"><button class="btn btn-success">Download Excel</button></a></td></tr></table>
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