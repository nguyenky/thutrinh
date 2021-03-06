<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/simple-sidebar.css" rel="stylesheet">
  @yield('css')
</head>
<body ng-app="myApp">

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="">Kết quả sổ xố</a></li>
	      <li><a href="/sosach">Sổ sách</a></li>
	      <li><a href="#">Page 2</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="container-fluid">
		@yield('content')
	</div>
</body>
<footer>
	<script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstraps/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="plugins/underscorejs/underscore.js"></script>
    <!-- <script src="plugins/underscorejs/underscore-modules.js"></script> -->
    <script src="angularjs/angularjs.js"></script>

    @yield('angularjs')
</footer>
</html>