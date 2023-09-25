<?php
include 'connect.php';
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
		    padding: 35px 0px 20px 12px;	
		}
		.table{
			border: 2px solid black;
		}
		th{
			padding: 2px;
			color: white;
			background-color: black;
		}
		td{
			padding: 3px;
			border: 1px solid black;
		}
		button{
			padding: 10px 0px;
			color: #fff;
			outline: none;
			background: darkblue;
			border: 2px solid #fff;
			width: 80%;
			cursor: pointer;
			height: 40px;
			position: relative;
			border-radius: 5px;
		}
    </style>
</head>

<body>

	<div class="header">
		<h2 style="color: orangered;"><b>Admin Panel</b></h2>
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

		<center>
			<table class="table">
				<caption>
				<b><h1> Aluminae Message </h1></b><br>
				</caption>
			<br>
			<thead>
				<tr>
					<th>SI no</th>
					<th>Aluminae Name</th>
					<th>Message</th>
					<th>Recieved Date</th>
					<th>Operations</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$sql="select aluminae_msg.id,aluminae_msg.a_id,aluminae.aluminae_name, aluminae_msg.msg, aluminae_msg.logs from aluminae inner join aluminae_msg on aluminae.id=aluminae_msg.a_id";
					$result=mysqli_query($con,$sql);
					if($result){
						$i=0;
						while($row=mysqli_fetch_assoc($result)){
							$i++;
							$id=$row['id'];
							$a_id=$row['a_id'];
							$aluminae_name=$row['aluminae_name'];
							$msg=$row['msg'];
							$logs=$row['logs'];
							echo ' 
							<tr>
								<td>'.$i.'</td>
								<td><b>'.$aluminae_name.'</b></td>
								<td>'.$msg.'</td>
								<td>'.$logs.'</td>
								<td>
								<button class="btn del"><a href="msg_delete.php?deleteid='.$id.'">Delete</a></button>
							    </td>
							</tr>';
						}
						
					}
				?>
				
			</tbody>
			
				
		</center>

	</div>
	</div>
</body>
</html>