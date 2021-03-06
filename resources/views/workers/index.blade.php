@extends('app')
@section('content')
<marquee behavior="scroll" direction="left"><h3>Welcome to Mercy Affordable Housing..!</h3></marquee>
    <h1>Worker Details</h1>
	<table>
	<tr>
	@if (Auth::user()->role!=='pman')
	
<td><a href="{{url('/workers/create')}}" class="btn btn-success">Create Worker</a></td>
@endif
<td style="padding:0 875px 0 875px;"><a href="{{ URL::to('downloadExcel/workers/xlsx') }}"><button class="btn btn-success">Download Excel</button></a></td>
	</tr>
	</table>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		
            <th>Worker Name</th>
            <th>Worker Mobile Phone</th>
            <th>Worker Skills</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
		
	
        @foreach ($workers as $worker)
            <tr>
                <td>{{ $worker->worker_name }}</td>
                <td>{{ $worker->worker_mobilephone }}</td>
                <td>{{ $worker->worker_skills }}</td>
                <td><a href="{{url('workers',$worker->id)}}" class="btn btn-primary">Read</a></td>
				@if (Auth::user()->role!=='pman')
                <td><a href="{{route('workers.edit',$worker->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['workers.destroy', $worker->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
				@endif
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection