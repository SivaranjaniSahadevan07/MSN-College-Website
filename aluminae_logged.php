<?php
session_start();
include 'connect.php';
if (!isset($_SESSION["id"])) {
header("location:aluminae_login.php");
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
	<title>Aluminae Portal</title>
	<link rel="stylesheet" type="text/css" href="aluminae.css">
	<style type="text/css">
		.profile{
			background-color: paleturquoise;
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
			object-fit: cover;
			border-radius: 25px;
		}
		i{
			margin: 10px;
		}
		
	</style>
</head>

<body>

	<div class="header">
		<h2 style="color: darkred;"><b>Aluminae Dashboard</b></h2>
		<div class="logout">
			<a href="logout.php" style="color:orangered;font-size: 20px;padding: 50px 50px 0px 20px;">Logout</a>

		</div>
	</div>

	<div class="container">
		<div class="menu">
			<ul>
				<li class="active"><a href="aluminae_logged.php">Profile</a></li>
				<li><a href="invitations.php">Invitations</a></li>
				<li><a href="aluminae_msg.php">Message</a></li>
			</ul>
	    </div>

		<div class="content">
			<div class="profile">
				<div class="Prof-img">
					<img src="student.jpg">
					<br><br>
			    	<div class="alum-details">
			    		<h3>Welcome <?php echo $_SESSION['username']; ?></h3>
			    		<br><br>
						<i style="font-weight: bold;">TOTAL Invitations : </i>	
						<i><?php 
							echo countRecord("select * from invitations",$con);
						   ?> 	
						</i>
			    	</div>
				</div>
			</div>
	    </div>
	</div>

</body>
</html>
