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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
</head>
@if (Auth::user())
<body>

<div class="container" align= "center" >

@if (Auth::user()->role==='work')
			<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
	  <img height="50" Width="130" src="./Images/mercy-housing-logo.png" alt="Mercy housing" onerror="this.style.display='none'">
    </div>
    <ul class="nav navbar-nav">
   <li><a href="{{ action('WorkorderController@index') }}">Work Orders</a> </li>
	<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
	 </ul>
  </div>
</nav>
@elseif (Auth::user()->role==='pman')
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
	  <img height="50" Width="130" src="./Images/mercy-housing-logo.png" alt="Mercy housing" onerror="this.style.display='none'">
    </div>
    <ul class="nav navbar-nav">
<li>	<a href="{{ action('PropertyController@index') }}">Properties</a> </li>
	<li><a href="{{ action('BuildingController@index') }}">Buildings</a> </li>
	<li>	<a href="{{ action('BuildingmanagerController@index') }}">Building Managers</a> </li>
		<li> <a href="{{ action('ComplaintController@index') }}">Complaints</a> </li>
		  <li><a href="{{ action('WorkorderController@index') }}">Work Orders</a></li>
    <li><a href="{{ action('WorkerController@index') }}">Workers</a></li>
	<li> <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a> </li>
	 </ul>
  </div>
</nav>
	@elseif (Auth::user()->role==='bman')
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
	  <img height="50" Width="130" src="./Images/mercy-housing-logo.png" alt="Mercy housing" onerror="this.style.display='none'">
    </div>
    <ul class="nav navbar-nav">
	<li><a href="{{ action('BuildingController@index') }}">Buildings</a></li>
    <li><a href="{{ action('ComplaintController@index') }}">Complaints</a></li>
    <li><a href="{{ action('WorkorderController@index') }}">Work Orders</a></li>
    <li><a href="{{ action('WorkerController@index') }}">Workers</a></li>
	<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a> </li>
	 </ul>
  </div>
</nav>
@else
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
	  <img height="50" Width="130" src="./Images/mercy-housing-logo.png" alt="Mercy housing" onerror="this.style.display='none'">
    </div>
    <ul class="nav navbar-nav">
<li><a href="{{ action('UserController@index') }}">User</a> </li>
	<li><a href="{{ action('PropertyController@index') }}">Properties</a></li>
	<li><a href="{{ action('PropertymanagerController@index') }}">Property Managers</a></li>
	<li><a href="{{ action('BuildingController@index') }}">Buildings</a></li>
	<li><a href="{{ action('BuildingmanagerController@index') }}">Building Managers</a></li>
    <li><a href="{{ action('ComplaintController@index') }}">Complaints</a> </li>
    <li><a href="{{ action('WorkorderController@index') }}">Work Orders</a> </li>
    <li><a href="{{ action('WorkerController@index') }}">Workers</a> </li>
	<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    </ul>
  </div>
</nav>
	
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