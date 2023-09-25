<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff Portal</title>
	<link rel="stylesheet" type="text/css" href="staff.css">
	<style type="text/css">
		.content{
		    padding: 50px;	
		}
		button{
			padding: 10px;
			color: #fff;
			outline: none;
			background: darkblue;
			border: 2px solid #fff;
			width: auto;
			cursor: pointer;
			height: 40px;
			position: relative;
			border-radius: 5px;
		}
		input{
			margin-top: 5px;
		}
		.course{
			width: 100%;
			height: 8vh;
			padding: 5px;
			margin-top: 5px;
		}
		.description{
			width: 100%;
			height: 20vh;
			padding: 5px;
			margin-top: 5px;
		}
		.profile{
			background-color: palegreen;
			padding: 40px 80px 40px 80px;
			position: relative;
			margin-left: 350px;
			top: 30px;
			box-sizing: border-box;
			border-radius: 50px;
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

			<?php
				if(isset($_POST["submit"]))
				{
					$target_dir="upload/";
					$target_file=$target_dir.basename($_FILES["efile"]["name"]);

					if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
					{
						$sql="insert into notes (course,description,file)values('{$_POST["course"]}','{$_POST["description"]}','{$target_file}')";
						mysqli_query($con,$sql);
						//echo "<p><b>File Sucessfully Uploaded</b></p>";
						header('location:notes_upload.php');
					}
						else{
							echo "<p>file not uploaded</p>";
						}
					}
			?>
			
			<form method="post" enctype="multipart/form-data">
				
				<label><b>Course Name</b></label>
				<br>
				<textarea class="course" name="course" required></textarea>
				<br><br>
				<label><b>Description</b></label>
				<br>
				<textarea class="description" name="description" required></textarea>
				<br><br>
				<label><b>Upload File</b></label>
				<br>
				<input type="file" name="efile" required>
				<br><br>	
				<button type="submit" name="submit">Upload File</button>
			</form>
			
	    </div>
	</div>

</body>
</html>