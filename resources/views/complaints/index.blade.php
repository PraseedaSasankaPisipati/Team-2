@extends('app')
@section('content')
@if (Auth::user()->role!=='pman')
    <h1>Complaint Details</h1>
	<table>
    <tr>
	
	<td><a href="{{url('/complaints/create')}}" class="btn btn-success">Create Complaint</a> </td>
@endif
	<td style="padding:0 1000px 0 1000px;"><a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel</button></a> </td>
	</tr></table>
	<hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		    <th>Building Name</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Mobile Phone</th>
            <th>Cutomer Apt Phone</th>
            <th>Cusomter Complaint</th>
			<th>Cusomter Address</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
		
	
        @foreach ($complaints as $complaint)
            <tr>
                <td>{{ $complaint->building->building_name }}</td>
			    <td>{{ $complaint->customer_name }}</td>
                <td>{{ $complaint->customer_email }}</td>
                <td>{{ $complaint->customer_mobilephone }}</td>
                <td>{{ $complaint->customer_aptphone }}</td>
                <td>{{ $complaint->customer_complaint }}</td>
				<td>{{ $complaint->customer_address }}</td>

                <td><a href="{{url('complaints',$complaint->id)}}" class="btn btn-primary">Read</a></td>
				@if (Auth::user()->role!=='pman')
                <td><a href="{{route('complaints.edit',$complaint->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['complaints.destroy', $complaint->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
				@endif
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection