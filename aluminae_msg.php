<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aluminae Portal</title>
	<link rel="stylesheet" type="text/css" href="aluminae.css">
	<style type="text/css">
		.content{
			padding: 40px 0px 0px 80px;
		}
		label{
			font-weight: bold;
		}
		textarea{
			width: 200%;
			height: 20vh;
			border: 1px solid black;
			padding: 5px;
		}
		button{
			padding: 10px 0;
			color: #fff;
			outline: none;
			background: darkblue;
			border: 2px solid #fff;
			width: 50%;
			cursor: pointer;
			height: 40px;
			position: relative;
			border-radius: 5px;
		}
		.mandatory{
			color: red;
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
				<li><a href="alumninae_msg.php">Message</a></li>
			</ul>
	    </div>

		<div class="content">

		    <?php
		    	if (isset($_POST["submit"])) {
		    		$sql="insert into aluminae_msg (a_id,msg,logs)values({$_SESSION["id"]},'{$_POST["msg"]}',now())";
		    		mysqli_query($con,$sql);
		    			echo "<p>Message sent successully</p>";
		    			header("location:aluminae_msg.php");
		    	}
		    ?>
		    
		    	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<br><br>
				<label>Message <b class="mandatory">*</b></label>
				<br><br>			
				<textarea name="msg" required></textarea>
				<br><br>
				<button type="submit" name="submit">Send</button>
			</form>
		    			
	    </div>
	   

	</div>

</body>
</html>

