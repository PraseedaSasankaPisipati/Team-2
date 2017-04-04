@extends('app')
@section('content')
    <h1>Property Details</h1>
	 <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Property Name</td>
                <td><?php echo ($property['property_name']); ?></td>
            </tr>
			<tr>
                <td>Property Address</td>
                <td><?php echo ($property['property_address']); ?></td>
            </tr>
            <tr>
                <td>Number Of Buildings</td>
                <td><?php echo ($property['number_of_buildings']); ?></td>
            </tr>
			 </tbody>
      </table>
@stop