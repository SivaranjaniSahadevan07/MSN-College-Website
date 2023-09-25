<?php
session_start();
include 'connect.php';
if (!isset($_SESSION["id"])) {
header("location:aluminae_login.php");
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
		.content{
			padding: 50px 0px 15px 50px;
			width: 70%;
			height: auto;
		}
		h3{
			color: darkorange;
			text-align: left;
			padding-top: 5px;
		}
		p{
			text-align: justify;
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
			<h2 style="text-align:center;color: darkblue;">Invitations</h2><br><br>   
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
                                    echo '<ul>
                                          <h3>'.$event.':</h3><br>
                                          <p>'.$msg.'</p><br>
                                          <p><b>Date recieved: </b>'.$logs.'</p><br>
                                          <h6><center>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<center></h6>
                                          </ul>';
                                }   
                            }
                            else{
                                	echo "<h3>No Invitations</h3>";
                                } 
                        ?>

	    </div>
	</div>

</body>
</html>
