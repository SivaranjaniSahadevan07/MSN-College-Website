<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<head>
<title>Student Login</title>
<link rel="icon" href="MSN-College_icon.png">
<link rel="stylesheet" type="text/css" href="login.css">
<style type="text/css">
    .user{
        border-radius: 80px;
        border: 2px solid white;
        object-fit: cover;
    }
</style>
</head>

<body>
        <?php
            if(isset($_POST["submit"]))
            {
                $sql = "select *from stu_login where username = '{$_POST["username"]}' and email = '{$_POST["email"]}'and password = '{$_POST["password"]}'"; 
                $result = mysqli_query($con, $sql);
                if($result->num_rows>0)
                {
                    $row=$result->fetch_assoc();
                    $_SESSION["id"]=$row["id"];
                    $_SESSION["username"]=$row["username"];
                    $_SESSION["email"]=$row["email"];
                    $_SESSION["password"]=$row["password"];
                    header("location:stu_logged.php");
                }
                else{
                    echo"<p>Invalid user details</p>";
                }
            }
        ?>
    <div class="box">
    <img src="student.jpg" class="user">
        <h1>Login Here</h1>
        <br>
        <form action="stu_login.php" method="POST">

            <p style="text-align: left;">Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <br><br>
            <p style="text-align: left;">Email</p>
            <input type="text" name="email" placeholder="Enter Email" required>
            <br><br>
            <p style="text-align: left;">Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <br><br><br>
             <div class="buttons">     
             <button name="submit" type="submit">Submit</button>
             
            <button><a href="index.php" style="text-decoration: none;color: white;">Cancel</a></button> 
            </div>

        </form>     
    </div> 

</body>
</html>