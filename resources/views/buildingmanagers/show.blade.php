@extends('app')
@section('content')
    <h1>Building Manager Details</h1>
	 <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Building Manager Name</td>
                <td><?php echo ($buildingmanager['buildingmanager_name']); ?></td>
            </tr>
			<tr>
                <td>Building Manager MobilePhone</td>
                <td><?php echo ($buildingmanager['buildingmanager_mobilephone']); ?></td>
            </tr>
            <tr>
                <td>Building Manager Email</td>
                <td><?php echo ($buildingmanager['buildingmanager_email']); ?></td>
            </tr>
			 </tbody>
      </table>
@stop