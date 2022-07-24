<!DOCTYPE html>
<html>
<head>
	<title>Bijoy Travels</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="Udashboard.php">Bijoy Travels</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
					role="button" data-toggle="dropdown">User Login</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="Ulogin.php">Guest</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="trgrp/TGlogin.php">Tour Group</a>
						</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
					role="button" data-toggle="dropdown">Register</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="Usignup.php">Guest</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="trgrp/TGsignup.php">Tour Group</a>
						</div>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>Let's Make your Tour experience Better.  Our office opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			
			<h5>What we provide ?</h5>
			<ul>
			<li>Best Comparisions</li>
				<li>Affordable Packages</li>
				<li> Experienced Guides</li>
				<li>Good Transportation</li>
				<li>Renowned Travel Agencies</li>
			</ul>

			<h5>Contact us</h5>
			<ul>
				<li>Address:House no:568 , Road no:42/B <br><span style="padding-left:60px;">Talaimari , Rajshahi.</li>
				<li>Mobile:01742720393</li>
				<li>Email:bijoydebnath862@gmail.com</li>
				
			</ul>
		</div>		
		<div class="col-md-8" id="main_content">
			<center><h3>User Registration Form</h3></center>
			<form action="Uregister.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile Number:</label>
					<input type="number" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
			
	</div>
	</div>
</body>
</html>