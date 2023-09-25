<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$sql="delete from notice_board where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:notice_board.php');
	}else{
		die(mysql_error($con));
	}
}
?>