<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from students where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:student_record.php');
	}else{
		die(mysql_error($con));
	}
}