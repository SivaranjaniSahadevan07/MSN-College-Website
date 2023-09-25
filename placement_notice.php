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
		.content{
		    padding: 40px;	
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
		img{
			width: 120px;
			height: 100px;
			border-radius: 1000px;
			border: 2px solid white;
			object-fit: cover;
		}
		label{
			font-weight: bold;
		}
		#company_name{
			width: 100%;
			height: 5vh;
			padding: 5px;
			margin-top: 5px;
		}
		#eligibility{
			width: 100%;
			height: 20vh;
			padding: 5px;
			margin-top: 5px;
		}
		#link{
			width: 100%;
			height: 10vh;
			padding: 5px;
			margin-top: 5px;
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
			if(isset($_POST['submit'])){
			    $company_name = $_POST['company_name']; 
			    $eligibility = $_POST['eligibility'];  
			    $link = $_POST['link']; 
			    $sql="insert into placement_notice (company_name,eligibility,link) values('$company_name','$eligibility','$link')";
			    $result=mysqli_query($con,$sql);
			    if($result){
			    	//echo "<p> Data added successfully.</p>";	
    				header('location:placement_notice.php');
			    }else{
			    	die(mysqli_error($con));
			    }
			}

		?>

		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<br>

				<div class="input-group">
					<label>Company Name</label>			
					<textarea name="company_name" id="company_name" required></textarea>
			     </div><br>
			     
			     <div class="input-group">
				    <label>Job Description</label>	
					<textarea name="eligibility" id="eligibility" required></textarea>
			     </div><br>

			     <div class="input-group">
				    <label>ApplyLink</label>	
					<textarea name="link" id="link" required></textarea>
			     </div><br>

				<button type="submit" name="submit" class="button">Send</button>
			</form>

	</div>

</body>
</html>
