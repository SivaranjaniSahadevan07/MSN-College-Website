<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from invitations where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:invite_aluminae.php');
	}else{
		die(mysql_error($con));
	}
}
?>