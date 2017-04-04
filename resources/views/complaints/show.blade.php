@extends('app')
@section('content')
    <h1>Complaint Details</h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Customer Name</td>
                <td><?php echo ($complaint['customer_name']); ?></td>
            </tr>
            <tr>
                <td>Customer Email</td>
                <td><?php echo ($complaint['customer_email']); ?></td>
            </tr>
            <tr>
                <td>Customer Mobile Phone</td>
                <td><?php echo ($complaint['customer_mobilephone']); ?></td>
            </tr>
            <tr>
                <td>Customer Apt Phone </td>
                <td><?php echo ($complaint['customer_aptphone']); ?></td>
            </tr>
            <tr>
                <td>Complaint</td>
                <td><?php echo ($complaint['customer_complaint']); ?></td>
            </tr>
			<tr>
                <td>Complaint</td>
                <td><?php echo ($complaint['customer_address']); ?></td>
            </tr>
            </tbody>
      </table>
	  @stop