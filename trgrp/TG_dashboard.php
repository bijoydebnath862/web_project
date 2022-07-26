<?php
	session_start();
	function get_TG_issue_booking_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"tour");
		$TG_issue_booking_count = 0;
		$tg_name = $_SESSION['name'];
		$query = "select count(*) as TG_issue_booking_count from issued_bookings where tg = '$tg_name'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$TG_issue_booking_count = $row['TG_issue_booking_count'];
	}
	return($TG_issue_booking_count);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tour Group Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
				<a class="navbar-brand" href="TG_dashboard.php">Bijoy Travels</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="TG_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">Packages</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="manage_package.php">View All my Packages</a>
						<a class="dropdown-item" href="add_package.php"> Add Packages</a>
					</div>
				</li>
		
		</ul>
	</div>
</nav>
<br><br>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Bookings:</div>
				<div class="card-body">
					<p class="card-text">No. of Issued Bookings: <?php echo get_TG_issue_booking_count();?> </p>
					<a href="view_issued_booking.php" class="btn btn-danger" >View Issued Bookings</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>