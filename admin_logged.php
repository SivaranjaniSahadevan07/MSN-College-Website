<?php
session_start();
include 'connect.php';
if (!isset($_SESSION["id"])) {
header("location:admin_login.php");
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
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<style type="text/css">
		.content{
			padding: 35px 0px 0px 0px;
		}
		.profile{
			background-color: deepskyblue;
			padding: 40px 80px 40px 80px;
			position: relative;
			margin-left: 350px;
			top: 10px;
			box-sizing: border-box;
			border-radius: 50px;
		}
		img{
			width: 120px;
			height: 100px;
			border-radius: 200px;
			border: 2px solid white;
			object-fit: cover;
		}
		i{
			margin: 10px;
		}
	</style>
</head>

<body>

	<div class="header">
		<h2><b><a href="admin_logged.php" style="color: orangered;">Admin Panel</a></b></h2>
		<div class="logout">
			<a href="logout.php" style="color:white;font-size: 20px;">Logout</a>
		</div>
	</div>

	<div class="container">
		<div class="menu">
			<ul>
				<li><a href="student_record.php">Student</a></li>
				<li><a href="staff_record.php">Staff</a></li>
				<li><a href="aluminae_record.php">Aluminae</a></li>
				<li><a href="admin_msg.php">Message</a></li>
				<li><a href="invite_aluminae.php">Invite</a></li>
				<li><a href="#">Website</a>
					<div class="sub_menu">
						<ul>
							<li><a href="gallery_upload.html">Gallery</a></li>
							<li><a href="notice_board.php">Events</a></li>
							<li><a href="achieved.php">Achieved</a></li>
					    </ul>
					</div>
				</li>
			</ul>
	    </div>

		<div class="content">
			
			<div class="profile">
				
					<img src="admn.jpg">
				
				<br><br>
			    <div class="adm-details">
					<i style="font-weight: bold;">ADMIN : </i>
					<i>	<?php
						$sql="select name from admin_login";
						$result=mysqli_query($con,$sql);
						$row=mysqli_fetch_assoc($result);
						$name=$row['name'];
						echo $name;
						?>
					</i>
					<br><br>
					<i style="font-weight: bold;">TOTAL STUDENTS : </i>	
					<i><?php 
						echo countRecord("select * from students",$con);
					   ?> 	
					</i>
					<br><br>
					<i style="font-weight: bold;">TOTAL STAFFS : </i>	
					<i><?php 
						echo countRecord("select * from staffs",$con);
					   ?> 	
					</i>
					<br><br>
					<i style="font-weight: bold;">TOTAL ALUMINAE : </i>	
					<i><?php 
						echo countRecord("select * from aluminae",$con);
					   ?> 	
					</i>
					<br><br>
					<i style="font-weight: bold;">TOTAL MESSAGES : </i>	
					<i><?php 
						echo countRecord("select * from aluminae_msg",$con);
					   ?> 	
					</i>				
				</div>
											
			</div>
			
	    </div>
	</div>

</body>
</html>