@extends('app')
@section('content')
    <h1>Property Manager Details</h1>
	 <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Property Manager Name</td>
                <td><?php echo ($propertymanager['propertymanager_name']); ?></td>
            </tr>
			<tr>
                <td>Property Manager MobilePhone</td>
                <td><?php echo ($propertymanager['propertymanager_mobilephone']); ?></td>
            </tr>
            <tr>
                <td>Property Manager Email</td>
                <td><?php echo ($propertymanager['propertymanager_email']); ?></td>
            </tr>
			 </tbody>
      </table>
@stop