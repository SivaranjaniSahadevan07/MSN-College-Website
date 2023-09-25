<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Portal</title>
	<link rel="stylesheet" type="text/css" href="stu.css">
	<style type="text/css">
		.content{
			padding: 40px;
		}
		h2{
			padding: 10px;
		}		
		th{
			padding: 10px;
			color: white;
			background-color: black;
		}
		td{
			padding: 10px;
			border: 1px solid black;
		}
		
	</style>
</head>

<body>

	<div class="header">
		<h2 style="color: orangered;"><b>Student Dashboard</b></h2>
		<div class="logout">
			<a href="logout.php" style="color:white;font-size: 20px;padding: 50px 50px 0px 20px;">Logout</a>
		</div>
	</div>

	<div class="container">
		<div class="menu">
			<ul>
				<li class="active"><a href="stu_logged.php">Profile</a></li>
				<li><a href="notes.php">Notes</a></li>
				<li><a href="placement.php">Placement</a></li>

			</ul>
	    </div>

		<div class="content" id="placement">
			<caption><h2>Placement Drives</h2></caption>
			<table>

			<tbody>
				<?php
					$sql="select * from placement_notice";
					$result=mysqli_query($con,$sql);
					if($result->num_rows>0){
						echo "<table>
							<tr>
								<th>SNO</th>
								<th>COMPANY NAME</th>
								<th>JOB DESCRIPTION</th>
								<th>APPLY Here</th>
							</tr>
						";
						$i=0;
						while($row=$result->fetch_assoc())
						{
							$i++;
							echo"<tr>";
							echo"<td>($i)</td>";
							echo"<td>{$row["company_name"]}</td>";
							echo"<td>{$row["eligibility"]}</td>";
							echo"<td><a href='{$row["link"]}' target='_blank'>Apply</a></td>";
							echo"</tr>";
						}
						echo"</table>";
					}
				?>				
			</tbody>
			
	    </div>
	</div>

</body>
</html>