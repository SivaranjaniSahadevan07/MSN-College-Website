<?php
    //database connection establish here  

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(!$con) {  
      die(mysqli_error($con)); 
    }
?> 