@extends('app')
@section('content')
    <h1>User Details</h1>
	 <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>User Name</td>
                <td><?php echo ($user['name']); ?></td>
            </tr>
            <tr>
                <td>User Email</td>
                <td><?php echo ($user['email']); ?></td>
            </tr>
            <tr>
                <td>User Role</td>
                <td><?php echo ($user['role']); ?></td>
            </tr>
			 </tbody>
      </table>
@stop