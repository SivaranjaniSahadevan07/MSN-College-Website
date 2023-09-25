<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from aluminae where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:aluminae_record.php');
	}else{
		die(mysql_error($con));
	}
}
?>