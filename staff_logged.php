<?php
session_start();
include 'connect.php';
if (!isset($_SESSION["id"])) {
header("location:staff_login.php");
}
function countRecord($sql,$con){
	$result=$con->query($sql);
	return $result->num_rows;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff Portal</title>
	<link rel="stylesheet" type="text/css" href="staff.css">
	<style type="text/css">
		.profile{
			background-color: palegreen;
			padding: 40px 80px 40px 80px;
			position: relative;
			margin-left: 350px;
			top: 30px;
			box-sizing: border-box;
			border-radius: 50px;
		}
		img{
			width: 120px;
			height: 100px;
			border-radius: 1000px;
			border: 2px solid white;
			object-fit: cover;
		}
		
	</style>
</head>

<body>

	<div class="header">
		<h2 style="color: darkred;"><b>Staff Dashboard</b></h2>
		<div class="logout">
			<a href="logout.php" style="color:orangered;font-size: 20px;padding: 50px 50px 0px 20px;">Logout</a>

		</div>
	</div>

	<div class="container">
		<div class="menu">
			<ul>
				<li class="active"><a href="staff_logged.php">Profile</a></li>
				<li><a href="notes_upload.php">Notes</a></li>
				<li><a href="placement_notice.php">Placement</a></li>

			</ul>
	    </div>

		<div class="content">

			<div class="profile">
				<div class="Prof-img">
					<img src="staff.jpg">
					<br><br>
			    	<div class="staff-details">
			    		<br>
			    		<h3>Welcome <?php echo $_SESSION['username']; ?></h3>
			    		<br><br>
				    	<i><b>TOTAL STUDENTS : </b></i>	
						<i><?php 
							echo countRecord("select * from students",$con);
						   ?> 	
						</i>
						<br><br>
			    	</div>
				</div>
			</div>
			
	    </div>
	</div>

</body>
</html>