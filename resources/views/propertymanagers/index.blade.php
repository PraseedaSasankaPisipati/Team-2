@extends('app')
@section('content')
<marquee behavior="scroll" direction="left"><h3>Welcome to Mercy Affordable Housing..!</h3></marquee>
    <h1>Property Manager Details</h1>
	<table>

    <a href="{{url('/propertymanagers/create')}}" class="btn btn-success">Add Property Manager</a>

<tr>
<td style="padding:0 875px 0 875px;"><a href="{{ URL::to('downloadExcel/propertymanagers/xlsx') }}"><button class="btn btn-success">Download Excel</button></a> </td>
</tr></table>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		
            <th>Property Manager Name</th>
            <th>Property Manager Email</th>
            <th>Propoerty Manager PhoneNumber</th>
        <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
		 @foreach ($propertymanagers as $propertymanager)
            <tr>
                <td>{{ $propertymanager->propertymanager_name }}</td>
                <td>{{ $propertymanager->propertymanager_mobilephone }}</td>
                <td>{{ $propertymanager->propertymanager_email }}</td>
                <td><a href="{{url('propertymanagers',$propertymanager->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('propertymanagers.edit',$propertymanager->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['propertymanagers.destroy', $propertymanager->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

	
       
        </tbody>

    </table>
@endsection