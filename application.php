<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admission</title>
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
			background-color: #036c9e;
		}
		.content{
			margin: 200px;
			display: flex;
			padding: 10px;
			position: relative;
			justify-content: space-between;
		}
		.box{
			width: fit-content;
			background-color: white;
			padding: 100px;
			border-radius: 5%;
			border: 2px solid gray;
			box-shadow: 2px 4px grey;
		}
		a{
			text-decoration: none;
			color: darkblue;
		}
		a:hover{
			color: blue;
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
				top: -20px;
				left: 50px;
		}
		.button1:hover{
				background-color: blue;
				color: white;
		}
	</style>
</head>
<body>
	<a href="index.php" class="button1">HOME</a>
	<center>
		<div class="content">
			<div class="box ug">
				<a href="ug_application.html"><h1>UG</h1><br><h1>Admission</h1></a>
			</div>
			<div class="box pg">
				<a href="pg_application.html"><h1>PG</h1><br><h1>Admission</h1></a>
			</div>
		</div>
	</center>
</body>
</html>