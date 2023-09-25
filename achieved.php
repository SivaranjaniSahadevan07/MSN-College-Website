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
		    padding: 25px 0px 50px 50px;	
		}
		label{
			font-weight: bold;
			margin-left: 10px;
			font-size: 20px;
		}
		#title{
			width: 100%;
			height: 20vh;
			border: 1px solid black;
			padding: 5px;
			margin: 10px;
		}
		#content{
			width: 100%;
			height: 20vh;
			border: 1px solid black;
			padding: 5px;
			margin: 10px;
		}
		.button{
			padding: 10px 0;
			color: #fff;
			background: darkblue;
			border: 2px solid #fff;
			width: 20%;
			cursor: pointer;
			height: 40px;
			border-radius: 10px;
			margin-left: 200px;
		}
		.btn{
			color: white;
			padding: 10px;	
			text-decoration: none;
			border-radius: 10px;
			border: 2px solid #fff;
			font-weight: bold;
			cursor: pointer;
		}
		.upt{
			background-color: tomato;
		}
		.del{
			background-color: blue;
		}
		.btn:hover{
			background-color: gray;
		}
		.table{
			border-left: 1px solid black;
		}
		th{
			padding: 2px;
			color: white;
			background-color: black;
		}
		td{
			padding: 3px;
			border-bottom: 1px solid black;
			border-right: 1px solid black;
		}
		.mandatory{
			color: red;
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

	    <?php
			if(isset($_POST['submit'])){
			    $title = $_POST['title']; 
			    $details = $_POST['details'];  
			    $sql="insert into achieved (title,details) values('$title','$details')";
			    $result=mysqli_query($con,$sql);
			    if($result){
			    	//echo "<p> Data added successfully.</p>";	
    				header('location:achieved.php');
			    }else{
			    	die(mysqli_error($con));
			    }
			}

		?>


			<table class="table">
				<caption>
				<b><h2> Achievements of month</h2></b><br>
				</caption>
			<br><br>
			<thead>
				<tr>
					<th>SI</th>
					<th>Title</th>
					<th>Content</th>
					<th>Operations</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$sql="select * from achieved";
					$result=mysqli_query($con,$sql);
					if($result){
						$i=0;
						while($row=mysqli_fetch_assoc($result)){
							$i++;
							$id=$row['id'];
							$title=$row['title'];
							$details=$row['details'];
							echo ' 
							<tr>
								<td>'.$i.'</td>
								<td><b>'.$title.'</b></td>
								<td>'.$details.'</td>
								<td>
								<button class="btn del"><a href="achieved_delete.php?deleteid='.$id.'">Delete</a></button>
							    </td>
							</tr>';
						}
						
					}
				?>
			</tbody>
		</table>

	</div>

</body>
</html>