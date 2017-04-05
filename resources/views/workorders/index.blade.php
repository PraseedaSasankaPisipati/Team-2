@extends('app')
@section('content')
@if (Auth::user()->role!=='work')
 <h1>WorkOrder Details</h1>
<table>
<tr>

   
   <td> <a href="{{url('/workorders/create')}}" class="btn btn-success">Create Work Order</a></td>
@endif
    
	<td style="padding:0 875px 0 875px;"><a href="{{ URL::to('downloadExcel/workorders/xlsx') }}"><button class="btn btn-success">Download Excel</button></a> </td>
	</tr></table>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		
            <th>Worker Name</th>
            <th>Complaint Id</th>
            <th>Worker Mobile Phone</th>
            <th>Work Order Description</th>
			<th>Work Order Estimated Cost</th>
			<th>Work Order Actual Cost</th>
			<th>Work Order Date</th>
			<th>Work Order Completion Date</th>
            <th>Track Status</th>
            <th>Update Status</th>
            @if (Auth::user()->role!=='work')
            <th colspan="3">Actions</th>
            @endif
        </tr>
        </thead>
        <tbody>
		
	
        @foreach ($workorders as $workorder)
            <tr>
                <td>{{ $workorder->worker->id }}</td>
                <td>{{ $workorder->complaint_id }}</td>
                <td>{{ $workorder->worker_mobilephone }}</td>
                <td>{{ $workorder->order_description }}</td>
				<td>{{ $workorder->order_est_cost }}</td>
				<td>{{ $workorder->order_actual_cost }}</td>
				<td>{{ $workorder->order_date }}</td>
				<td>{{ $workorder->order_completion_date }}</td>
                <td><a href="{{url('workorders',$workorder->id)}}" class="btn btn-primary">Track Status</a></td>
                 @if (Auth::user()->role==='work')
                <td><a href="{{route('workorders.edit',$workorder->id)}}" class="btn btn-warning">Update Status</a></td>
                @endif
                 @if (Auth::user()->role!=='work')
                
                <td><a href="{{route('workorders.edit',$workorder->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['workorders.destroy', $workorder->id]]) !!}
                   
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				    {!! Form::close() !!}
					 @endif
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection