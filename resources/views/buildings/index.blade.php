@extends('app')
@section('content')

	<marquee behavior="scroll" direction="left"><h3>Welcome to Mercy Affordable Housing..!</h3></marquee>


    <h1>Building Details</h1>
	<table>
	<tr>
	@if (Auth::user()->role!=='bman')
    <td><a href="{{url('/buildings/create')}}" class="btn btn-success">Add Building</a></td>
@endif
	<td style="padding:0 875px 0 875px;"><a href="{{ URL::to('downloadExcel/buildings/xlsx') }}"><button class="btn btn-success">Download Excel</button></a></td></tr></table>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		
            <th>Building Name</th>
            <th>Building Address</th>
            <th>Number Of Apartments</th>
        <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
		
	
        @foreach ($buildings as $building)
            <tr>
                <td>{{ $building->building_name }}</td>
                <td>{{ $building->building_address }}</td>
                <td>{{ $building->number_of_apartments }}</td>
                <td><a href="{{url('buildings',$building->id)}}" class="btn btn-primary">Read</a></td>
				@if (Auth::user()->role!=='bman')
                <td><a href="{{route('buildings.edit',$building->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['buildings.destroy', $building->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
				@endif
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection