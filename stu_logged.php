<?php
session_start();
include 'connect.php';
if (!isset($_SESSION["id"])) {
header("location:stu_login.php");
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
	<title>Student Portal</title>
	<link rel="stylesheet" type="text/css" href="stu.css">
	<style type="text/css">
		.profile{
			background-color: skyblue;
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
			border-radius: 50px;
			object-fit: contain;
		}
		i{
			margin: 10px;
		}
		
	</style>
</head>

<body>

	<div class="header">
		<h2 style="color: orangered;"><b>Student Dashboard</b></h2>
		<div class="logout">
			<a href="logout.php" style="color:white;font-size: 20px;padding: 50px 50px 0px 20px;">Logout</a>
		</div>
	</div>

	<div class="container">
		<div class="menu">
			<ul>
				<li class="active"><a href="stu_logged.php">Profile</a></li>
				<li><a href="notes.php">Notes</a></li>
				<li><a href="placement.php">Placement</a></li>

			</ul>
	    </div>

		<div class="content">
			
			<div class="profile">
				<div class="Prof-img">
					<img src="student.jpg">
					<br><br>
			    	<div class="stu-details">
			    		<h3>Welcome <?php echo $_SESSION['username']; ?></h3><br>
			    		<i><b>TOTAL NOTES : </b></i>	
						<i><?php 
							echo countRecord("select * from notes",$con);
						   ?> 	
						</i>
						<br><br>
						<i><b>TOTAL PLACEMENTS : </b></i>	
						<i><?php 
							echo countRecord("select * from placement_notice",$con);
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