@extends('app')
@section('content')
    <h1>Tracking Details</h1>

    <h2> <b>Present Status</b> : <?php echo ($workorder['order_status']); ?><br> </h2> 
	 <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Worker Id</td>
                <td><?php echo ($workorder['worker_id']); ?></td>
            </tr>
            <tr>
                <td>Worker Mobile Phone</td>
                <td><?php echo ($workorder['worker_mobilephone']); ?></td>
            </tr>
            <tr>
                <td>Work Order Description</td>
                <td><?php echo ($workorder['order_description']); ?></td>
            </tr>
			<tr>
                <td>Work Order Estimated Cost</td>
                <td><?php echo ($workorder['order_est_cost']); ?></td>
            </tr>
			<tr>
                <td>Work Order Actual Cost</td>
                <td><?php echo ($workorder['order_actual_cost']); ?></td>
            </tr>
			<tr>
                <td>Work Order Date</td>
                <td><?php echo ($workorder['order_date']); ?></td>
            </tr>
			<tr>
                <td>Work Order Completion Date</td>
                <td><?php echo ($workorder['order_completion_date']); ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php echo ($workorder['order_status']); ?></td>
            </tr>
            </tbody>
      </table>
	  @stop