<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $aluminae_name = $_POST['aluminae_name'];  
    $email = $_POST['email']; 
    $ph_no = $_POST['ph_no']; 
    $address = $_POST['address']; 
    $blood_grp = $_POST['blood_grp']; 

    $sql="insert into aluminae (aluminae_name,email,ph_no,address,blood_grp) values('$aluminae_name','$email','$ph_no','$address','$blood_grp')";

    $result=mysqli_query($con,$sql);

    if($result){
    	header('location:aluminae_rec_insert.php');
    	//echo "<h1> Data inserted successfully.</h1>"; 
    }else{
    	die(mysqli_error($con));
    }
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
			padding: 10px 0px 0px 250px;
		}


form{
	width: 100%;
	max-width: 600px;
}
.input-group{
	margin-bottom: 38px;
	position: relative;
}
input, textarea{
	width: 100%;
	padding: 10px;
	outline: 0;
	border: 2px solid darkblue;
	color: black;
	background: #fff;
	font-size: 18px;
}
label{
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	padding: 10px;
	color: black;
	font-weight: bold;
	cursor: text;
	transition: 0.2s;
}
button{
	padding: 10px 0;
	color: #fff;
	outline: none;
	background: darkblue;
	border: 2px solid #fff;
	width: 20%;
	cursor: pointer;
	height: 40px;
	position: relative;
	margin-left: 300px;
	border-radius: 5px;
}
input:focus~label,
input:valid~label,
textarea:focus~label,
textarea:valid~label{
	top: -35px;
	font-size: 14px;
}
.row{
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
	width: 800px;
	position: relative;
	left: -180px;
	margin-top: 22px;
}
.row .input-group{
	flex-basis: 48%;
}
select{
	width: 400px;
	height: 44px;
	position:relative;
	padding: 5px;
	outline: 0;
	left: 17px;
	border: 2px solid darkblue;
	color: black;
	background: #fff;
	font-size: 16px;
	font-family: serif,sans-serif;
	font-weight: bold;
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
					    </ul>
					</div>
				</li>
			</ul>
	    </div>

		<div class="content">
	  
			<form method="POST">

			  <div class="row">

			     <div class="input-group">
				    <input type="text" name="aluminae_name" required>
				    <label for="aluminae_name"> Aluminae Name</label>
			     </div>

			     <div class="input-group">
				    <input type="email" name="email" required>
				    <label for="email"> Email</label>
			     </div>

			     <div class="input-group">
				    <input type="text" name="ph_no" required>
				    <label for="ph_no"> Phone Number</label>
			     </div>

			     <div class="input-group">
				    <input type="text" name="address" required>
				    <label for="address"> Address</label>
			     </div>

			     <div class="input-group" style="position: relative; bottom:8px;">
				    <label for="blood_grp" name="blood_grp" style="position: relative; margin: 16px;left: -15px;"> Blood Group</label>
				    <div class="select">
				    	<select name="blood_grp">
				    		<option>--select--</option>
				    		<option>A+</option>
				    		<option>B+</option>
				    		<option>AB</option>
				    		<option>AB+</option>
				    		<option>AB-</option>
				    		<option>O+</option>
				    		<option>O-</option>
				    	</select>
				    </div>
			     </div>

				 <button type="submit" name="submit">Add Aluminae</button>
			  </div>
	        </form>

	    </div>
	</div>

</body>
</html>