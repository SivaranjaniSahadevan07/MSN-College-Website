<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from aluminae_msg where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:admin_msg.php');
	}else{
		die(mysql_error($con));
	}
}
?>