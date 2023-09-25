<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Courses Offered</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			margin-bottom: 0;
		    margin-left: 0;
		    margin-right: 0;
		    margin-top: 0;
		    padding-bottom: 0;
		    padding-left: 0;
		    padding-right: 0;
		    padding-top: 0; 
		}
		body{
			background-size: cover;
			box-sizing: border-box;
			background-color: skyblue;
			font-family: serif,sans-serif;
		}
		.table1{
			border: 1px solid black;
			padding: 0px;
		}
		#table2{
			border: 1px solid black;
			padding: 0px;
			width: 60%;
		}
		th{
			padding: 10px;
			color: white;
			background-color: #036c9e;
		}
		td{
			padding: 15px;
			background-color: white;
			border-top: 1px solid black;
			border-left: 1px solid black;
			border-right: 1px solid black;
		}
		.content{
			padding: 50px;
		}
		.button1{
				background-color: tomato;
				color: white;
				padding: 15px 20px;
				margin: 80px;
				position: absolute;
				text-decoration: none;
				border-radius: 10px;
				font-weight: bold;
				top: -60px;
				left: 50px;
		}
		.button1:hover{
				background-color: blue;
				color: white
		}
	</style>
</head>
<body>
	<a href="index.php" class="button1">HOME</a>

	<center>
		<div class="content">
			
		
			<table class="table1">
				<caption>
				<b><h1 style="color:darkblue;">Courses Offered</h1></b><br>
				</caption>
			<br><br>

			<thead>
				<tr>
					<th>Courses</th>
					<th>Graduation</th>
					<th>Years</th>
					<th>Tuition Fees</th>
					<th>Special Fees</th>
					<th>Lab & Maintanance Fees</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select * from courses where c_type='cos' and graduate_type='UG'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$c_name=$row['c_name'];
							$graduate_type=$row['graduate_type'];
							$c_years=$row['c_years'];
							$tuition_fees=$row['tuition_fees'];
							$special_fees=$row['special_fees'];
							$lab_fees=$row['lab_fees'];
							echo ' 
							<tr>
								<td>'.$c_name.'</td>
								<td>'.$graduate_type.'</td>
								<td>'.$c_years.'</td>
								<td>'.$tuition_fees.'</td>
								<td>'.$special_fees.'</td>
								<td>'.$lab_fees.'</td>
							</tr>';
						}
						
					}

					$sql="select * from courses where c_type='cos' and graduate_type='PG'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$c_name=$row['c_name'];
							$graduate_type=$row['graduate_type'];
							$c_years=$row['c_years'];
							$tuition_fees=$row['tuition_fees'];
							$special_fees=$row['special_fees'];
							$lab_fees=$row['lab_fees'];
							echo ' 
							<tr>
								<td>'.$c_name.'</td>
								<td>'.$graduate_type.'</td>
								<td>'.$c_years.'</td>
								<td>'.$tuition_fees.'</td>
								<td>'.$special_fees.'</td>
								<td>'.$lab_fees.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>
		</table>

					<table id="table2">
				<caption>
				<b><h1 style="color:darkblue;"> Add-on Courses Offered</h1></b><br><br>
				</caption>
			<br><br>

			<thead>
				<tr>
					<th>Courses</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select * from courses where c_type='add-on'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$c_name=$row['c_name'];
							echo ' 
							<tr>
								<td>'.$c_name.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>
		</table>
		</div>
			
		</center>
</body>
</html>