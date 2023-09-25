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
		    padding: 25px 10px 0px 50px;	
		}
		.event{
			height: 10vh;
		}
		label{
			font-weight: bold;
		}
		textarea{
			width: 50%;
			height: 20vh;
			border: 1px solid black;
			padding: 5px;
		}
		button{
			padding: 10px 0px;
			color: #fff;
			outline: none;
			background: darkblue;
			border: 2px solid #fff;
			width: 10%;
			cursor: pointer;
			height: 40px;
			position: relative;
			border-radius: 5px;
		}
		.btn{
			color: white;
			width: 80%;
			padding: 10px;	
			text-decoration: none;
			border-radius: 10px;
			border: 2px solid #fff;
			font-weight: bold;
			cursor: pointer;
		}
		.del{
			background-color: blue;
		}
		.btn:hover{
			background-color: gray;
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
		.input-group{
			display: inline-block;
			margin: 25px;
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
						<li><a href="notice_board.php">Notice</a></li>
						<li><a href="achieved.php">Achieved</a></li>
				    </ul>
				</div>
			</li>
		</ul>
	</div>

	<div class="content">
		<?php
		    	if (isset($_POST["submit"])) {
		    		$sql="insert into invitations (event,msg,logs)values('{$_POST["event"]}','{$_POST["msg"]}',now())";
		    		mysqli_query($con,$sql);
		    			//echo "<p>Message sent successully</p>";
		    			echo "<script>window.alert('Invitation sent!');</script>";
		    			header("location:invite_aluminae.php");

		    	}
		    ?>
		    
		    	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			    	<br><br>
					<label>Event Name <b class="mandatory">*</b></label>
					<br><br>			
					<textarea name="event" class="event" required></textarea>
					<br><br>
					<label>Details <b class="mandatory">*</b></label>
					<br><br>			
					<textarea name="msg" required></textarea>
					<br><br>
					<button type="submit" name="submit">Invite</button>
				</form>

							<table class="table">
				<caption>
				<b><h3> Notice Board </h3></b><br>
				</caption>
			<br><br>
			<thead>
				<tr>
					<th>SI</th>
					<th>Event</th>
					<th>Event Details</th>
					<th>Invited on</th>
					<th>Operations</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$sql="select * from invitations";
					$result=mysqli_query($con,$sql);
					if($result){
						$i=0;
						while($row=mysqli_fetch_assoc($result)){
							$i++;
							$id=$row['id'];
							$event=$row['event'];
							$msg=$row['msg'];
							$logs=$row['logs'];
							echo ' 
							<tr>
								<td>'.$i.'</td>
								<td><b>'.$event.'</b></td>
								<td>'.$msg.'</td>
								<td>'.$logs.'</td>
								<td>
								<button class="btn del"><a href="invite_delete.php?deleteid='.$id.'">Delete</a></button>
							    </td>
							</tr>';
						}
						
					}
				?>
			</tbody>

		</table>
		<br><br>
	</div>
	</div>

</body>
</html>