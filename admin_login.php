<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<head>
<title>Admin Login</title>
<link rel="icon" href="MSN-College_icon.png">
<link rel="stylesheet" type="text/css" href="login.css">
<style type="text/css">
    .box{
        background: whitesmoke;
        color: red;
        top: 4%;
        left: 38%;
        width: 28%;
        height: 72%;
        position: absolute;
        transform: translate(-10%,20%);
        box-sizing: border-box;
        padding: 70px 50px 0px 50px;
        border-radius: 20px;
        box-shadow: 0px 0px 5px 2px #ccc
    }
    .user{
        border-radius: 100px;
        border: 2px solid white;
    }
</style>
</head>

<body>
<?php
            if(isset($_POST["submit"]))
            {
                $sql = "select *from admin_login where username = '{$_POST["username"]}' and password = '{$_POST["password"]}'"; 
                $result = mysqli_query($con, $sql);
                if($result->num_rows>0)
                {
                    $row=$result->fetch_assoc();
                    $_SESSION["id"]=$row["id"];
                    $_SESSION["username"]=$row["username"];
                    header("location:admin_logged.php");
                }
                else{
                    echo"<p>Invalid user details</p>";
                }
            }
        ?>

    <div class="box">
    <img src="admn.jpg" class="user">
        <h1>Login Here</h1>
        <br><br>
        <form action="admin_login.php" method="POST">

            <p style="text-align: left;">Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <br><br>
            <p style="text-align: left;">Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <br><br>

             <div class="buttons">     
             <button name="submit" type="submit">Submit</button>
             
            <button><a href="index.php" style="text-decoration: none;color: white;">Cancel</a></button> 
            </div>

        </form>     
    </div> 

</body>
</html>