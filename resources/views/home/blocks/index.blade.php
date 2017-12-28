<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- <link href="plugins/bootstraps/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/kqxs.css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="">Kết quả sổ xố</a></li>
	      <li><a href="#">Page 1</a></li>
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
		<!-- <div class="col-md-12">
			<div class="col-md-2">
				<div class="btn-xoso">
					<button type="button" class="btn btn-primary btn-lg ">Large button</button>
				</div>
				<div class="btn-xoso">
					<button type="button" class="btn btn-primary btn-lg ">Large button</button>
				</div>
				<div class="btn-xoso">
					<button type="button" class="btn btn-primary btn-lg ">Large button</button>
				</div>
				<div class="btn-xoso">
					<button type="button" class="btn btn-primary btn-lg ">Large button</button>
				</div>
				<div class="btn-xoso">
					<button type="button" class="btn btn-primary btn-lg ">Large button</button>
				</div>
			</div>
			<div class="col-md-10">
				dsds
			</div>
		</div> -->
	</div>
</body>
<footer>
	<script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstraps/js/bootstrap.bundle.min.js"></script>
</footer>
</html>