<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dapertments</title>
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
			font-family: serif,sans-serif;
			background-color: skyblue;
		}
		.table{
			border: 1px solid black;
			padding: 0px;
		}
		th{
			padding: 20px;
			color: white;
			background-color: #036c9e;
		}
		td{
			padding: 20px;
			width: 75%;
			border-top: 1px solid black;
			border-left: 1px solid black;
			border-right: 1px solid black;
			background-color: white;
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
			
		
			<table class="table">
				<caption>
				<b><h1 style="color:darkblue;"> DEPARTMENTS OF MSN COLLEGE </h1></b><br><br>
				</caption>
			<br><br>

			<thead>
				<tr>
					<th colspan=2>Department: Tamil</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='Tamil'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>
			
			<thead>
				<tr>
					<th colspan=2>Department: English</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='English'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>

			<thead>
				<tr>
					<th colspan=2>Department: Maths</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='Maths'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>

			<thead>
				<tr>
					<th colspan=2>Department: Physics</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='Physics'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>

			<thead>
				<tr>
					<th colspan=2>Department: Computer Science</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='CS'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>			
			</tbody>

			<thead>
				<tr>
					<th colspan=2>Department: Information Technology & Computer Application</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='IT'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>

			<thead>
				<tr>
					<th colspan=2>Department: Commerce</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='B.Com'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>

			<thead>
				<tr>
					<th colspan=2>Department: Commerce CA</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select concat(staff_name,concat(' ',qualification)) as staff_name,designation from staffs where department='B.Com(CA)'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>

			<thead>
				<tr>
					<th colspan=2>Other Staffs</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="select * from staffs where designation='Librarian'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>
			<tbody>
				<?php
					$sql="select * from staffs where designation='Physical Directress'";
					$result=mysqli_query($con,$sql);
					if($result){
						while($row=mysqli_fetch_assoc($result)){
							$staff_name=$row['staff_name'];
							$designation=$row['designation'];
							echo ' 
							<tr>
								<td>'.$staff_name.'</td>
								<td>'.$designation.'</td>
							</tr>';
						}
						
					}
				?>				
			</tbody>
			</div>
			
		</center>
</body>
</html>