@extends('app')
@section('content')
    <h1>Worker Details</h1>
	 <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Worker Name</td>
                <td><?php echo ($worker['worker_name']); ?></td>
            </tr>
            <tr>
                <td>Worker Mobile Phone</td>
                <td><?php echo ($worker['worker_mobilephone']); ?></td>
            </tr>
            <tr>
                <td>Worker Skills</td>
                <td><?php echo ($worker['worker_skills']); ?></td>
            </tr>
			 </tbody>
      </table>
@stop