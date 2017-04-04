@extends('app')
@section('content')
    <h1>Building Details</h1>
	 <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Building Name</td>
                <td><?php echo ($building['building_name']); ?></td>
            </tr>
			<tr>
                <td>Building Address</td>
                <td><?php echo ($building['building_address']); ?></td>
            </tr>
            <tr>
                <td>Number Of Apartments</td>
                <td><?php echo ($building['number_of_apartments']); ?></td>
            </tr>
			 </tbody>
      </table>
@stop