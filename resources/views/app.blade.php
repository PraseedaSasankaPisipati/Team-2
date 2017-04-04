<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MAH</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<style type="text/css">
     th {
    background-color: #599bb3;
    color: white;
}
         tr:hover{background-color:#f5f5f5}
#anchor {         /* unvisited link */
a:link {
    color: #A4CFDE;
}
/* visited link */
a:visited {
    color: #A18EBF;
}
/* mouse over link */
a:hover {
    color: #ADBF9F;
}
/* selected link */
a:active {
    color: #B19FBF;
} 
    }
.btn.btn-success{background-color:#599bb3;border:#599bb3;} 
.btn.btn-primary{background-color:#599bb3;border:#599bb3;} 
.btn.btn-warning{background-color:#599bb3;border:#599bb3;}  
.btn.btn-danger{background-color:#599bb3;border:#599bb3;} 
</style>
</head>
@if (Auth::user())
<body>
<div class="container" align= "center" >
<div class=col-md><img src="./Images/mercy-housing-logo.png" alt="Mercy housing" onerror="this.style.display='none'"></div>
 <br><br>
@if (Auth::user()->role==='work')
   <a href="{{ action('WorkorderController@index') }}">Work Orders</a> |
	<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
@elseif (Auth::user()->role==='pman')
	<a href="{{ action('BuildingController@index') }}">Buildings</a> |
		<a href="{{ action('PropertyController@index') }}">Properties</a> |
		 <a href="{{ action('ComplaintController@index') }}">Complaints</a> |
	<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
@else
	<a href="{{ action('BuildingController@index') }}">Buildings</a> |
    <a href="{{ action('ComplaintController@index') }}">Complaints</a> |
    <a href="{{ action('WorkorderController@index') }}">Work Orders</a> |
    <a href="{{ action('WorkerController@index') }}">Workers</a> |
	<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
@endif
</div>
<div class="container">
    @yield('content')
</div>
@else
<div><p>Login to view</p></div>
@endif
</body>
</html>