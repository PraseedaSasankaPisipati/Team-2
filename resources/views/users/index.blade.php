@extends('app')
@section('content')
<marquee behavior="scroll" direction="left"><h3>Welcome to Mercy Affordable Housing..!</h3></marquee>
	<table>
	<tr>
<td><a href="{{url('/users/create')}}" class="btn btn-success">Create User</a></td>
<td style="padding:0 875px 0 875px;"><a href="{{ URL::to('downloadExcel/users/xlsx') }}"><button class="btn btn-success">Download Excel</button></a></td>
	</tr>
	</table>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		
            <th>User Name</th>
            <th>User Email</th>
            <th>User Role</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
		
	
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td><a href="{{url('users',$user->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection